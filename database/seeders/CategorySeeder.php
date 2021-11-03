<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
                [
                  "name" => "Accounting and Finance",
                  "created_at" => Carbon::now(),
                  "updated_at" => Carbon::now()
                ],
                [
                  "name" => "Data Entry",
                  "created_at" => Carbon::now(),
                  "updated_at" => Carbon::now()
                ],
                [
                  "name" => "Counselling",
                  "created_at" => Carbon::now(),
                  "updated_at" => Carbon::now()
                ],
                [
                  "name" => "Court and Administration",
                  "created_at" => Carbon::now(),
                  "updated_at" => Carbon::now()
                ],
                [
                  "name" => "Human Resource",
                  "created_at" => Carbon::now(),
                  "updated_at" => Carbon::now()
                ],
                [
                  "name" => "Investigation",
                  "created_at" => Carbon::now(),
                  "updated_at" => Carbon::now()
                ],
                [
                  "name" => "IT and Computers",
                  "created_at" => Carbon::now(),
                  "updated_at" => Carbon::now()
                ],
        ];
                DB::table('categories')->insert($data);

    }
}
