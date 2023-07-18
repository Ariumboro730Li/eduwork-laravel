<?php

namespace Database\Seeders;


use App\Models\transactionDetail;
use Faker\Factory as Faker;
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
         $faker = Faker::create();

        for($i=0; $i<10; $i++){
            $transactiondetail= new transactionDetail;
            $transactiondetail->transaction_id = rand(1,10);
            $transactiondetail->book_id = rand(1,10);
            $transactiondetail->qty = $faker->randomDigitNotNull();
            

            $transactiondetail->save();

     }
    }
}
