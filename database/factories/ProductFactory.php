<?php

namespace Database\Factories;

class ProductFactory
{
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'price_net' => fake()->numberBetween(100, 10000,),
            'quantity' => fake()->numberBetween(1, 100),
        ];
    }
}