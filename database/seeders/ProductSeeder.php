<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'name' => 'Laptop',
                'category_id' => 1, // Electronics
                'price' => 1200.00,
                'description' => 'High-performance laptop for professionals.',
                'stock_quantity' => 50,
            ],
            [
                'name' => 'T-shirt',
                'category_id' => 2, // Clothing
                'price' => 20.00,
                'description' => 'Comfortable cotton T-shirt in various sizes.',
                'stock_quantity' => 200,
            ],
            [
                'name' => 'Programming Book',
                'category_id' => 3, // Books
                'price' => 30.00,
                'description' => 'A great book to learn programming.',
                'stock_quantity' => 100,
            ],
        ]);
    }
}
