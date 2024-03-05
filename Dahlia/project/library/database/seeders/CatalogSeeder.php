<?php

namespace Database\Seeders;
use Faker\Factory as Faker;
use App\Models\Catalog;
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

        $faker = Faker::create();
        
        for ($i = 0 ; $i < 4 ; $i++) {
            $catalog = new Catalog;
            
            $catalog->id_catalog='KG'.$faker ->randomNumber(2,false);
            $catalog->name = $faker -> name;

            $catalog->save();
        }
    }
}
