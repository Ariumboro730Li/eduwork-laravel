<?php

use App\Transaction;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker::create();
        for ($i = 0; $i < 20; $i++) {
            $transaction = new Transaction;
            $transaction->member_id = $faker->numberBetween(1, 20);
            $transaction->date_start = $faker->date;
            $transaction->date_end = $faker->dateTimeBetween($startDate = '-1week', $endDate = '+1 week');
            $transaction->save();
        }
    }
}
