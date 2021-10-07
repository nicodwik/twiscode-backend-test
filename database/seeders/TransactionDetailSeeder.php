<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TransactionDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 10; $i++) { 
            \DB::table('transaction_details')->insert([
                'transaction_id' => \Arr::random([1,2,3,4,5,6,7,8,9,10]),
                'price' => 200000,
                'amount' => 500000,
                'subtotal' => 700000
            ]);
        }
    }
}
