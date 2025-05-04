<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransactionSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('transactions')->insert([
            [
                'user_id' => 1, // John Doe
                'total_amount' => 1240.00,
                'status' => 'completed',
            ],
            [
                'user_id' => 2, // Jane Doe
                'total_amount' => 40.00,
                'status' => 'pending',
            ],
        ]);
    }
}
