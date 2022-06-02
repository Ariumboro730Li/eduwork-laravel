<?php

namespace Database\Seeders;

use App\models\Member;
use Faker\factory as Faker;
use Illuminate\Database\Seeder;

class MemberSeeder extends Seeder
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
            $member = new Member;

            $member->name = $faker->name;
            $member->email = $faker->email;            
            $member->gender = $faker->randomElement(['M', 'F']);
            $member->phone_number = '085'.$faker->randomNumber(9);
            $member->address = $faker->address;

            $member->save();
        }
    }
}
