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
            'price' => 'integer',
            'sort_order' => 'integer',
        ];
    }
}
