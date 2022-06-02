<?php

namespace Database\Seeders;

use App\models\Book;
use Faker\factory as Faker;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i=0; $i < 20; $i++) {
            $book = new Book;

            $book->isbn = $faker->randomNumber(9);
            $book->title = $faker->title;
            $book->year = rand(2010,2021);
            $book->publisher_id = rand(1,20);
            $book->author_id = rand(1,20);
            $book->catalog_id = rand(1,5);
            $book->qty = rand(1,20);
            $book->price = rand(10000,20000);

            $book->save();            
        }

        
    }
}
