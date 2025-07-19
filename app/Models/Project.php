<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'about',
        'description',
        'category',
        'cover',
        'screenshots',
        'client_name',
        'project_client_id',
        'project_url',
        'demo_url',
        'github_url',
        'technologies',
        'start_date',
        'end_date',
        'status',
        'is_featured',
        'is_active',
        'sort_order'
    ];

    protected $casts = [
        'screenshots' => 'array',
        'technologies' => 'array',
        'start_date' => 'date',
        'end_date' => 'date',
        'is_featured' => 'boolean',
        'is_active' => 'boolean'
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($project) {
            if (empty($project->slug)) {
                $project->slug = Str::slug($project->name);
            }
        });

        static::updating(function ($project) {
            if ($project->isDirty('name') && empty($project->slug)) {
                $project->slug = Str::slug($project->name);
            }
        });
    }

    // Relationships
    public function projectClient()
    {
        return $this->belongsTo(ProjectClient::class);
    }

    // Scopes
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true);
    }

    public function scopeCompleted($query)
    {
        return $query->where('status', 'completed');
    }

    public function scopeOngoing($query)
    {
        return $query->where('status', 'ongoing');
    }

    public function scopeByCategory($query, $category)
    {
        return $query->where('category', $category);
    }

    public function scopeOrderBySortOrder($query)
    {
        return $query->orderBy('sort_order')->orderBy('created_at', 'desc');
    }

    // Accessors
    public function getCoverUrlAttribute()
    {
        if ($this->cover) {
            return asset('storage/' . $this->cover);
        }
        return asset('images/default-project.jpg');
    }

    public function getScreenshotUrlsAttribute()
    {
        if ($this->screenshots && is_array($this->screenshots)) {
            return array_map(function ($screenshot) {
                return asset('storage/' . $screenshot);
            }, $this->screenshots);
        }
        return [];
    }

    public function getFirstScreenshotAttribute()
    {
        $screenshots = $this->screenshot_urls;
        return count($screenshots) > 0 ? $screenshots[0] : $this->cover_url;
    }

    public function getTechnologyListAttribute()
    {
        return $this->technologies ? implode(', ', $this->technologies) : '';
    }

    public function getStatusBadgeAttribute()
    {
        $badges = [
            'completed' => '<span class="badge badge-success">Completed</span>',
            'ongoing' => '<span class="badge badge-primary">Ongoing</span>',
            'paused' => '<span class="badge badge-warning">Paused</span>',
        ];

        return $badges[$this->status] ?? '<span class="badge badge-secondary">Unknown</span>';
    }

    public function getDurationAttribute()
    {
        if ($this->start_date && $this->end_date) {
            return $this->start_date->diffInDays($this->end_date) + 1;
        }
        
        if ($this->start_date) {
            return $this->start_date->diffInDays(now()) + 1;
        }

        return null;
    }

    public function getDurationTextAttribute()
    {
        $duration = $this->duration;
        
        if (!$duration) {
            return 'Duration not specified';
        }

        if ($duration < 30) {
            return $duration . ' day' . ($duration > 1 ? 's' : '');
        }

        $months = round($duration / 30);
        return $months . ' month' . ($months > 1 ? 's' : '');
    }

    // Helper methods
    public function hasDemo()
    {
        return !empty($this->demo_url);
    }

    public function hasGithub()
    {
        return !empty($this->github_url);
    }

    public function hasProjectUrl()
    {
        return !empty($this->project_url);
    }

    public function hasClient()
    {
        return !empty($this->project_client_id) || !empty($this->client_name);
    }

    public function getClientName()
    {
        if ($this->projectClient) {
            return $this->projectClient->name;
        }
        
        return $this->client_name ?? 'Personal Project';
    }

    public function hasScreenshots()
    {
        return $this->screenshots && is_array($this->screenshots) && count($this->screenshots) > 0;
    }

    public function getTechnologiesCount()
    {
        return $this->technologies ? count($this->technologies) : 0;
    }
}