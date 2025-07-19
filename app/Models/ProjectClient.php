<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class ProjectClient extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'description',
        'logo',
        'website',
        'email',
        'phone',
        'address',
        'industry',
        'company_size',
        'contact_person',
        'is_active',
        'sort_order'
    ];

    protected $casts = [
        'contact_person' => 'array',
        'is_active' => 'boolean'
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($client) {
            if (empty($client->slug)) {
                $client->slug = Str::slug($client->name);
            }
        });

        static::updating(function ($client) {
            if ($client->isDirty('name') && empty($client->slug)) {
                $client->slug = Str::slug($client->name);
            }
        });
    }

    // Relationships
    public function projects()
    {
        return $this->hasMany(Project::class);
    }

    public function activeProjects()
    {
        return $this->hasMany(Project::class)->where('is_active', true);
    }

    public function featuredProjects()
    {
        return $this->hasMany(Project::class)->where('is_featured', true);
    }

    public function completedProjects()
    {
        return $this->hasMany(Project::class)->where('status', 'completed');
    }

    // Scopes
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeByIndustry($query, $industry)
    {
        return $query->where('industry', $industry);
    }

    public function scopeByCompanySize($query, $size)
    {
        return $query->where('company_size', $size);
    }

    public function scopeOrderBySortOrder($query)
    {
        return $query->orderBy('sort_order')->orderBy('name');
    }

    public function scopeWithProjectsCount($query)
    {
        return $query->withCount(['projects' => function ($query) {
            $query->where('is_active', true);
        }]);
    }

    // Accessors
    public function getLogoUrlAttribute()
    {
        if ($this->logo) {
            return asset('storage/' . $this->logo);
        }
        return asset('images/default-client-logo.png');
    }

    public function getContactPersonNameAttribute()
    {
        return $this->contact_person['name'] ?? null;
    }

    public function getContactPersonEmailAttribute()
    {
        return $this->contact_person['email'] ?? null;
    }

    public function getContactPersonPhoneAttribute()
    {
        return $this->contact_person['phone'] ?? null;
    }

    public function getContactPersonPositionAttribute()
    {
        return $this->contact_person['position'] ?? null;
    }

    public function getCompanySizeBadgeAttribute()
    {
        $badges = [
            'startup' => '<span class="badge badge-info">Startup</span>',
            'small' => '<span class="badge badge-success">Small</span>',
            'medium' => '<span class="badge badge-warning">Medium</span>',
            'large' => '<span class="badge badge-primary">Large</span>',
            'enterprise' => '<span class="badge badge-dark">Enterprise</span>',
        ];

        return $badges[$this->company_size] ?? '<span class="badge badge-secondary">Not specified</span>';
    }

    // Helper methods
    public function hasLogo()
    {
        return !empty($this->logo);
    }

    public function hasWebsite()
    {
        return !empty($this->website);
    }

    public function hasContactPerson()
    {
        return !empty($this->contact_person);
    }

    public function getProjectsCount()
    {
        return $this->projects()->where('is_active', true)->count();
    }

    public function getCompletedProjectsCount()
    {
        return $this->projects()->where('status', 'completed')->count();
    }

    public function getOngoingProjectsCount()
    {
        return $this->projects()->where('status', 'ongoing')->count();
    }

    public function getLatestProject()
    {
        return $this->projects()->where('is_active', true)->latest()->first();
    }

    public function getWebsiteUrl()
    {
        if (!$this->website) {
            return null;
        }

        // Add protocol if not present
        if (!preg_match('/^https?:\/\//', $this->website)) {
            return 'https://' . $this->website;
        }

        return $this->website;
    }

    public function getIndustryFormatted()
    {
        return $this->industry ? ucwords(str_replace(['_', '-'], ' ', $this->industry)) : 'Not specified';
    }

    public function getCompanySizeFormatted()
    {
        return $this->company_size ? ucfirst($this->company_size) : 'Not specified';
    }
}