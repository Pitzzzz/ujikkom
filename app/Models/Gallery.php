<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $fillable = [
        'image',
        'title',
        'category',
        'date',
        'short_description',
    ];

    protected function casts(): array
    {
        return [
            'date' => 'date',
        ];
    }
}
