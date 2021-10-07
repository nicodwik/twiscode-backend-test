<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 10; $i++) { 
            \DB::table('transactions')->insert([
                'order_date' => now(),
                'status' => 'paid',
                'payment_date' => now()
            ]);
        }
    }
}
