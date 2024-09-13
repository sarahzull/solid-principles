<?php

namespace Database\Factories;

use App\Models\Stock;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class StockFactory extends Factory
{
    protected $model = Stock::class;

    public function definition()
    {
        return [
            'quantity' => $this->faker->randomElement([30, 20, 45, 40]),
            'product_id' => Product::factory(),  // Automatically associate with a product
        ];
    }
}