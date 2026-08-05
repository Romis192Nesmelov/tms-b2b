<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
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
}
