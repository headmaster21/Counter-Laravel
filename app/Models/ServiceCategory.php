<?php

namespace App\Models;


class ServiceCategory extends Category
{
    
        protected $table = 'categories';
    
        protected static function boot()
        {
            parent::boot();
    
            static::addGlobalScope('type', function ($builder) {
                $builder->where('type', self::class);
            });
    
            static::creating(function ($service_category) {
                $service_category->type = self::class;
            });
        }
}
