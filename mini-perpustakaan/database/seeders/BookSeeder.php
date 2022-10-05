<?php

namespace Database\Seeders;
use Faker\Factory as Faker;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;

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
        $faker = Faker::create();
        for($i=0; $i<15; $i++){
            $catalog = new Book;
            $catalog->isbn = $faker->randomNumber(5);
            $catalog->title = $faker->realText(50);
            $catalog->year = rand(2019,2022);

            $catalog->publisher_id = rand(1,10);
            $catalog->author_id = rand(1,10);
            $catalog->catalog_id = rand(1,10);

            $catalog->qty = rand(10,20);
            $catalog->price = rand(10000,20000);

            $catalog->save();
        }
    }
}
