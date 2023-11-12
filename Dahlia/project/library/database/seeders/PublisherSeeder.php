<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use App\Models\Publisher;
use Illuminate\Database\Seeder;
use Nette\Utils\Random;

class PublisherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        
        for ($i = 0 ; $i < 20 ; $i++) {
            $publisher = new Publisher;
            
            $publisher->id_publisher='PN'.$faker ->randomNumber(3,false);
            $publisher->name = $faker -> name;
            $publisher->email = $faker -> email();
            $publisher->phone_number='0823'.$faker ->randomNumber(8);
            $publisher->address = $faker -> address;


            $publisher->save();
        }
    }
}
