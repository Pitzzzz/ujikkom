<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'image',
        'category',
        'date',
        'title',
        'slug',
        'author',
        'read_time',
        'excerpt',
        'content',
        'quote',
    ];

    protected function casts(): array
    {
        return [
            'date' => 'date',
        ];
    }
}
