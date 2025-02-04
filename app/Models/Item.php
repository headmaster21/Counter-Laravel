<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table = 'items';
    
    protected $primaryKey   = 'id'; // Specify the primary key field - Replace 'id' with your custom string column name if different    
    public    $incrementing = false; // Indicate that the primary key is not auto-incrementing    
    protected $keyType      = 'string'; // Specify the data type of the primary key (optional but recommended)

    protected $fillable = [
        'id', 'name', 'description', 'price', 'type', // Shared attributes
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
