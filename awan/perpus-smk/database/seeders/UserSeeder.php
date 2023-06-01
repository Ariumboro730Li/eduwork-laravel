<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $transaction = new User();

        $transaction->name = 'awan';
        $transaction->email = 'awan@mail.com';
        $transaction->password = '12345678';
        $transaction->save();
    }
}
