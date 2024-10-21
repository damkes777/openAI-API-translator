<?php

namespace Database\Factories;

use App\Models\Product;

class ProductDescriptionFactory
{
    public function definition(): array
    {
        return [
            'product_id' => Product::factory(),
            'language' => fake()->randomElement(['en', 'de', 'fr']),
            'description' => fake()->sentence(),
        ];
    }
}