<?php

namespace Database\Seeders;

use App\TransactionDetail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class TransactionDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker_transaction_detail = Faker::create();
        for ($i = 0; $i < 20; $i++) {
            $transaction_detail = new TransactionDetail;
            $transaction_detail->transaction_id = $faker_transaction_detail->numberBetween(1, 20);
            $transaction_detail->book_id = $faker_transaction_detail->numberBetween(1, 20);
            $transaction_detail->qty = rand(50, 200);
            $transaction_detail->save();
        }
    }
}
