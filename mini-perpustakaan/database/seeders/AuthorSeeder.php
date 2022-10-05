<?php

namespace Database\Seeders;
use Faker\Factory as Faker;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Author;

class AuthorSeeder extends Seeder
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
            $author = new Author;
            $author->name = $faker->name;
            $author->gender = strtoupper($faker->lexify('M'));
            $author->email = $faker->email;
            $author->phone_number = '081' .$faker->randomNumber(8);
            $author->address = $faker->address;
            $author->save();
        }
    }
}
