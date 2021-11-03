<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JobtypeSeeder extends Seeder
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
          "name" => "Full Time",
          "created_at" => Carbon::now(),
          "updated_at" => Carbon::now()
        ],
        [
          "name" => "Part Time",
          "created_at" => Carbon::now(),
          "updated_at" => Carbon::now()
        ],
        [
          "name" => "Freelance",
          "created_at" => Carbon::now(),
          "updated_at" => Carbon::now()
        ],
        [
          "name" => "Internship",
          "created_at" => Carbon::now(),
          "updated_at" => Carbon::now()
        ],
        [
          "name" => "Temporary",
          "created_at" => Carbon::now(),
          "updated_at" => Carbon::now()
        ]
];
        DB::table('jobtypes')->insert($data);

    }
}
