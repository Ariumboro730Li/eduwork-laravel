<?php

namespace Database\Seeders;
use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Catalog;
class CatalogSeeder extends Seeder
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
            $catalog = new Catalog;
            $catalog->name = $faker->name;
            // $catalog->isbn = $faker->randomNumber(5);
            $catalog->save();
    }
}
}
