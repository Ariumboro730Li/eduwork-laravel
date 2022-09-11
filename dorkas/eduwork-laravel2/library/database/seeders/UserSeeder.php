<?php

namespace Database\Seeders;

Use App\Models\User;
use Illuminate\Database\Seeder;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Admin = User::create([
            'name' => 'Admin Library',
            'email' => 'admin@library.com',
            'password' => bcrypt('12345678')

        ]);

        $Admin->assignRole('admin');
        {
            $user = User::create([
                'name' => 'User Library',
                'email' => 'user@library.com',
                'password' => bcrypt('12345678')

            ]);

            $user->assignRole('admin');
        }
    }
}
