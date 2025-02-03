<?php

namespace App\Models;

class VehicleCategory extends Category
{
    protected $table = 'categories';

    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope('type', function ($builder) {
            $builder->where('type', self::class);
        });

        static::creating(function ($vehicle_category) {
            $vehicle_category->type = self::class;
        });
    }
}
