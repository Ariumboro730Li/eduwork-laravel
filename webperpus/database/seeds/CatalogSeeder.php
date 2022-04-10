<?php

use App\Catalog;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

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
        $fake_data_katalog = Faker::create();
        // $fakerbook = BookProvider::create();
        for ($i = 0; $i < 20; $i++) {
            $catalog = new Catalog;
            $catalog->name = $fake_data_katalog->name;
            $catalog->save();
        }
    }
}
