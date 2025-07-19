<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompanyService extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'description',
        'icon',
        'image',
        'features',
        'is_featured'
    ];

    protected $casts = [
        'features' => 'array',
        'is_featured' => 'boolean'
    ];

    public function projectClients()
    {
        return $this->hasMany(ProjectClient::class, 'service_id');
    }
}