<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Str;

class BlogPost extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'excerpt',
        'content',
        'featured_image',
        'category',
        'author_name',
        'author_initials',
        'reading_time',
        'views_count',
        'is_featured',
        'is_published',
        'published_at',
    ];

    protected $casts = [
        'is_featured' => 'boolean',
        'is_published' => 'boolean',
        'published_at' => 'datetime',
    ];

    protected $dates = [
        'published_at',
        'created_at',
        'updated_at',
    ];

    // Scopes
    public function scopePublished(Builder $query)
    {
        return $query->where('is_published', true)
                    ->whereNotNull('published_at')
                    ->where('published_at', '<=', now());
    }

    public function scopeFeatured(Builder $query)
    {
        return $query->where('is_featured', true);
    }

    public function scopeByCategory(Builder $query, $category)
    {
        if ($category && $category !== 'all') {
            return $query->where('category', $category);
        }
        return $query;
    }

    public function scopePopular(Builder $query, $limit = 5)
    {
        return $query->orderBy('views_count', 'desc')->limit($limit);
    }

    public function scopeRecent(Builder $query, $limit = 10)
    {
        return $query->published()
                    ->orderBy('published_at', 'desc')
                    ->limit($limit);
    }

    // Accessors
    public function getFormattedDateAttribute()
    {
        return $this->published_at ? $this->published_at->format('M j, Y') : $this->created_at->format('M j, Y');
    }

    public function getCategoryColorAttribute()
    {
        $colors = [
            'construction' => 'from-emerald-500 to-green-500',
            'design' => 'from-purple-500 to-pink-500',
            'interior' => 'from-orange-500 to-red-500',
            'tips' => 'from-rose-500 to-pink-500'
        ];

        return $colors[$this->category] ?? 'from-gray-500 to-gray-600';
    }

    public function getCategoryNameAttribute()
    {
        $names = [
            'construction' => 'Construction',
            'design' => 'Architecture',
            'interior' => 'Interior Design',
            'tips' => 'Tips & Guides'
        ];

        return $names[$this->category] ?? ucfirst($this->category);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    // Methods
    public function incrementViewCount()
    {
        $this->increment('views_count');
    }

    public function getExcerpt($length = 160)
    {
        if ($this->excerpt) {
            return Str::limit($this->excerpt, $length);
        }
        
        return Str::limit(strip_tags($this->content), $length);
    }
}