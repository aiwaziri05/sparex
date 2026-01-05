<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Project extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'long_description',
        'category',
        'image',
        'color',
        'tags',
        'technologies',
        'features',
        'images',
        'client',
        'duration',
        'team_size',
        'is_published',
        'show_on_homepage',
        'published_at',
    ];

    protected $casts = [
        'tags' => 'array',
        'technologies' => 'array',
        'features' => 'array',
        'images' => 'array',
        'is_published' => 'boolean',
        'show_on_homepage' => 'boolean',
        'published_at' => 'datetime',
    ];

    /**
     * Boot the model.
     */
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($project) {
            if (empty($project->slug)) {
                $project->slug = Str::slug($project->title);
            }
        });

        static::updating(function ($project) {
            if ($project->isDirty('title') && empty($project->slug)) {
                $project->slug = Str::slug($project->title);
            }
        });
    }

    /**
     * Scope a query to only include published projects.
     */
    public function scopePublished($query)
    {
        return $query->where('is_published', true)
            ->whereNotNull('published_at');
    }
}
