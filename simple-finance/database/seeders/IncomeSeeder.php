<?php

namespace Database\Seeders;

use App\Models\Income;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Str;

class IncomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ini_set("max_execution_time", 0);
        ini_set("max_input_time",  -1);
        ini_set("memory_limit", -1);
        set_time_limit(-1);

        $data = [
            [
                "category_id" => 6,
                "note" => Str::random(10),
                "total" => 10000000,
                "created_at" => date("Y-m-d H:i:s"),
                "updated_at" => date("Y-m-d H:i:s"),
            ],
            [
                "category_id" => 7,
                "note" => Str::random(10),
                "total" => 30000000,
                "created_at" => date("Y-m-d H:i:s"),
                "updated_at" => date("Y-m-d H:i:s"),
            ],
        ];
        foreach (array_chunk($data, 1000) as $key => $value) {
            Income::insert($data);
        }
    }
}
