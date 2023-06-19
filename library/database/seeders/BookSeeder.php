<?php

namespace Database\Seeders;

use App\Models\Book;
use Faker\Factory as Faker;
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

        for ($i = 0; $i < 20; $i++) {
            $book = new Book();

            $book->isbn = $faker->randomNumber(9);
            $book->title = $faker->sentence(3);
            $book->year = $faker->numberBetween(2010, 2021);

            $book->publisher_id = $faker->numberBetween(1, 20);
            $book->author_id = $faker->numberBetween(1, 20);
            $book->catalog_id = $faker->numberBetween(1, 4);

            $book->qty = $faker->numberBetween(10, 20);
            $book->price = $faker->numberBetween(10000, 20000);

            $book->save();
        }
    }
}
