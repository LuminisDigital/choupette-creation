<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'short_description',
        'description',
        'price',
        'stock',
        'image_path',
        'active'
    ];

    public function getStockStatusAttribute()
    {
        if ($this->stock === 0) {
            return 'Hors stock';
        } elseif ($this->stock < 10) {
            return 'Plus que ' . $this->stock . ' en stock';
        }
        return 'En stock';
    }

    public function isInStock()
    {
        return $this->stock > 0;
    }
}
