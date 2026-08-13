<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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
}
