<?php

namespace Database\Seeders;

use App\Models\Job;
use Carbon\Factory;
use Illuminate\Database\Seeder;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Job::factory()->count(100)->create();
        // Job::factory()->count(500)->create();
    }
}
