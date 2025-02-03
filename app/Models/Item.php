<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table = 'items';

    protected $fillable = [
        'name', 'description', 'price', 'type', // Shared attributes
        'weight', 'dimensions', // Product attributes
        'make', 'model', 'year', // Vehicle attributes
        'duration', 'provider', // Service attributes
    ];

    // Global scope to filter by type
    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope('type', function ($builder) {
            $builder->where('type', static::class);
        });
    }
}
