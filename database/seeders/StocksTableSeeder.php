<?php

namespace Database\Seeders;

use App\Models\Stock;
use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StocksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = Product::all();

        foreach ($products as $product) {
            Stock::factory()->create([
                'product_id' => $product->id,
            ]);
        }
    }
}
