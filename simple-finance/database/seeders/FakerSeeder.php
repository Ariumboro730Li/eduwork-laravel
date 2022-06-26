<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class FakerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        $data = [
            "name" => $faker->name,
            "alamat" => $faker->address,
            "kota" => $faker->city,
            "jalan" => $faker->street,
        ];
        dd($data);
    }
}
