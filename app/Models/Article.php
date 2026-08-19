<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Article extends Model
{
    protected $fillable = [
        'article',
        'name',
        'length',
        'size',
        'section',
        'density',
        'package',
        'product_id',
        'active'
    ];

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

    public function orders(): BelongsToMany
    {
        return $this->belongsToMany(Order::class);
    }

    public function scopeSearching(Builder $query): void
    {
        $searching = request('search');
        $query->where(function (Builder $q) use ($searching) {
            $q
                ->where('article', 'LIKE', "%{$searching}%")
                ->orWhere('name', 'LIKE', "%{$searching}%");
        })->where('active',1);
    }
}
