<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use Sluggable;

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    protected $fillable = [
        'image',
        'slug',
        'name',
        'description',
        'active'
    ];

    public function images(): HasMany
    {
        return $this->hasMany(Image::class);
    }

    public function activeImages(): HasMany
    {
        return $this->hasMany(Image::class)->where('active',1);
    }

    public function articles(): HasMany
    {
        return $this->hasMany(Article::class);
    }

    public function activeArticles(): HasMany
    {
        return $this->hasMany(Article::class)->where('active',1);
    }

    public function scopeSearching(Builder $query): void
    {
        $searching = request('search');
        $query->where(function (Builder $q) use ($searching) {
            $q
                ->where('name', 'LIKE', "%{$searching}%")
                ->orWhere('description', 'LIKE', "%{$searching}%");
        })->where('active',1);
    }
}
