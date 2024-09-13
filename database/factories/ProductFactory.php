<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition()
    {
        return [
            'sku' => $this->faker->randomElement(['BP063-0001','BP063-0002','BP063-0003','UA064-0002']),
            'name' => $this->faker->randomElement(['Giorgio','Firetrap','Kangol','Ben Sherman']),
            'price' => $this->faker->randomFloat(2, 100, 200), // Generates a random float between 100 and 200
        ];
    }
}