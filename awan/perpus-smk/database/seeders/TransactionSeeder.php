<?php

namespace Database\Seeders;

use App\Models\Transaction;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;


class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 10; $i++) {
            $transaction = new Transaction();

            $transaction->member_id = rand(1, 20);
            $transaction->date_start = $faker->date();
            $transaction->date_end = $faker->date();
            $transaction->status = $faker->randomElement(['Y', 'N']);

            $transaction->save();
        }
    }
}
