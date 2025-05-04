<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        DB::table('categories')->insert([
            ['name' => 'Electronics', 'description' => 'Electronic products like phones, laptops, etc.'],
            ['name' => 'Clothing', 'description' => 'Fashion items including clothes and accessories.'],
            ['name' => 'Books', 'description' => 'Books of various genres.'],
        ]);
    }
}

