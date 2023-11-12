<?php

namespace Database\Seeders;

use App\Models\Author;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
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
            $author = new Author;
            
            $author->id_author='AUT'.$faker ->randomNumber(4,false);
            $author->name = $faker -> name;
            $author->email = $faker -> email;
            $author->phone_number='0823'.$faker ->randomNumber(8);
            $author->address = $faker -> address;

            $author->save();
        }
        
    }
}
