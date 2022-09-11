<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([AuthorSeeder::class]);
        $this->call([CatalogSeeder::class]);
        $this->call([MemberSeeder::class]);
        $this->call([PublisherSeeder::class]);
        $this->call([BookSeeder::class]);
        $this->call([RoleSeeder::class]);
        $this->call([UserSeeder::class]);
    }
}
