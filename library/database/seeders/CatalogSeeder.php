<?php

namespace Database\Seeders;

use App\Models\Catalog;
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
        $faker = Faker::create();

        $catalogs = ['Fiction', 'Non-Fiction', 'Science', 'Biography'];

        foreach ($catalogs as $catalogName) {
            $catalog = new Catalog();
            $catalog->name = $catalogName;
            $catalog->save();
        }
    }
}
