<?php

namespace Database\Seeders;
use Faker\Factory as Faker;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Publisher;

class PublisherSeeder extends Seeder
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
        for($i=0; $i<15; $i++){
            $author = new Publisher;
            $author->name = $faker->name;
            $author->gender = strtoupper($faker->lexify('L'));
            $author->phone_number = '081' .$faker->randomNumber(8);
            $author->address = $faker->address;
            $author->email = $faker->email;
            $author->save();

    }
}
}
