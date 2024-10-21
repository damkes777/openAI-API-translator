<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory;

    public $fillable = [
        'name',
        'price_net',
        'quantity',
    ];

    public function descriptions(): HasMany
    {
        return $this->hasMany(ProductDescription::class, 'product_id', 'id');
    }
}