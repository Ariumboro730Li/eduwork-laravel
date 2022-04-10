<?php

use Faker\Factory as Faker;
use App\Member;
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
        //
        $faker_member = Faker::create();
        // 'gender' => $faker_member->randomElement($array = array('M', 'F'));
        for ($i = 0; $i < 20; $i++) {
            $member = new Member;
            $member->name = $faker_member->name;
            $member->gender = $faker_member->randomElement(['M', 'F']);
            $member->phone_number = '081' .  $faker_member->randomNumber(8);
            $member->address = $faker_member->address;
            $member->email = $faker_member->email;
            $member->save();
        }
    }
}
