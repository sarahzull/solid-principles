<?php

use Illuminate\Database\Seeder;
use Database\Seeders\StocksTableSeeder;
use Database\Seeders\ProductsTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $this->call(ProductsTableSeeder::class);
        $this->call(StocksTableSeeder::class);
    }
}
