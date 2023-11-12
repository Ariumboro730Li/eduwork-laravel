<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use App\Models\Transaction;
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
        $faker = Faker::create();
        
        for ($i = 0 ; $i < 50 ; $i++) {
            $trasaction = new Transaction;
            
            $trasaction->id_transaction ='TSC'.$faker ->randomNumber(6,false);
            $trasaction->member_id =rand(1,20);
            $trasaction->date_start=$faker ->date('Y-m-d H:m:s');
            $trasaction->date_end = $faker ->date('Y-m-d H:m:s'); 

            $trasaction->save();
        }
    }
}
