<?php

namespace Database\Seeders;

use App\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $fakerMember = Faker::create();
        for ($i = 0; $i < 20; $i++) {
            $user = new User;
            $user->name = $fakerMember->name;
            $user->email = $fakerMember->email;
            $user->email_verified_at = null;
            $user->password = $fakerMember->md5();
            $user->remember_token = $fakerMember->regexify('[A-Za-z0-9]{20}');
            $user->member_id = rand(1, 20);
            $user->save();
        }
    }
}
