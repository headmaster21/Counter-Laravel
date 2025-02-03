<?php

namespace App\Models;

class ProductCategory extends Category
{
    protected $table = 'categories';
    
    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope('type', function ($builder) {
            $builder->where('type', self::class);
        });

        static::creating(function ($product_category) {
            $product_category->type = self::class;
        });
    }
}
