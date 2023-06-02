<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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
        $transaction->password = Hash::make('12345678');
        $transaction->save();
    }
}
