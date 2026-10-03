<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'image',
        'title',
        'category',
        'price',
        'variants',
        'short_description',
        'sort_order',
    ];

    protected function casts(): array
    {
        return [
            'variants' => 'array',
            'price' => 'decimal:2',
            'sort_order' => 'integer',
        ];
    }
}
