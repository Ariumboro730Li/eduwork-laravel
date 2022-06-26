<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create([
            'id' => 1,
            'name' => 'Admin',
            'email' => 'admin@argon.com',
            'role_id' => 1,
            'picture' => '../argon/img/theme/team-3.jpg'
        ]);

        User::factory()->create([
            'id' => 2,
            'name' => 'Creator',
            'email' => 'creator@argon.com',
            'role_id' => 2,
            'picture' => '../argon/img/theme/team-4.jpg'
        ]);

        User::factory()->create([
            'id' => 3,
            'name' => 'Member',
            'email' => 'member@argon.com',
            'role_id' => 3,
            'picture' => '../argon/img/theme/team-5.jpg'
        ]);
    }
}
