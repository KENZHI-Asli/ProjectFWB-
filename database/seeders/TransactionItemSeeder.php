<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransactionItemSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('transaction_items')->insert([
            [
                'transaction_id' => 1, // Transaksi pertama
                'product_id' => 1, // Laptop
                'quantity' => 1,
                'price' => 1200.00,
            ],
            [
                'transaction_id' => 1, // Transaksi pertama
                'product_id' => 2, // T-shirt
                'quantity' => 2,
                'price' => 20.00,
            ],
            [
                'transaction_id' => 2, // Transaksi kedua
                'product_id' => 2, // T-shirt
                'quantity' => 2,
                'price' => 20.00,
            ],
        ]);
    }
}
