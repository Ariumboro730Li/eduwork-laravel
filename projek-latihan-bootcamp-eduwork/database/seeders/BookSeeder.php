<?php

namespace Database\Seeders;

use App\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $fake_data_book = Faker::create();
        for ($i = 0; $i < 20; $i++) {
            $book = new Book;
            $book->isbn = $fake_data_book->randomNumber(9);
            $book->title = $fake_data_book->name;
            $book->year = rand(2017, 2021);
            $book->publisher_id = rand(1, 20);
            $book->author_id = rand(1, 20);
            $book->catalog_id = rand(1, 20);
            $book->qty = rand(10, 20);
            $book->price = rand(10000, 30000);
            $book->save();
        }
    }
}
