<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'id' => 1,
            'name' => 'Travel',
            'description' => 'Travel ideas for everyone',
            'is_income' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('categories')->insert([
            'id' => 2,
            'name' => 'Food',
            'description' => 'Our favourite recipes',
            'is_income' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('categories')->insert([
            'id' => 3,
            'name' => 'Home',
            'description' => 'The latest trends in home decorations',
            'is_income' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('categories')->insert([
            'id' => 4,
            'name' => 'Fashion',
            'description' => 'Stay in touch with the latest trends',
            'is_income' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('categories')->insert([
            'id' => 5,
            'name' => 'Health',
            'description' => 'An apple a day keeps the doctor away',
            'is_income' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('categories')->insert([
            'id' => 6,
            'name' => 'Salary',
            'description' => 'This Month Salary',
            'is_income' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('categories')->insert([
            'id' => 7,
            'name' => 'Project',
            'description' => 'Fee Project',
            'is_income' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('categories')->insert([
            'id' => 8,
            'name' => 'Others',
            'description' => 'Others',
            'is_income' => 2,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
