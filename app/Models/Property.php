<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $fillable = [
        'title',
        'description',
        'price',
        'address',
        'city',
        'country',
        'project_type',
        'total_products',
        'delivery_time',
        'ownership_duration',
        'facilities',
        'bedrooms',
        'bathrooms',
        'area',
        'image',
        'is_featured',
        'is_active',
    ];

    protected $casts = [
        'price' => 'decimal:2',
        'area' => 'decimal:2',
        'is_featured' => 'boolean',
        'is_active' => 'boolean',
    ];
}
