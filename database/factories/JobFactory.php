<?php

namespace Database\Factories;

use App\Models\Job;
use App\Models\Jobtype;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class JobFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Job::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
          "job_title" => $this->faker->name,
          "location" => $this->faker->address,
          "min_salary" => $this->faker->randomDigit(),
          "max_salary" => $this->faker->randomDigit(),
          "tags" => $this->faker->name,
          "job_description" => $this->faker->paragraph(2),
          "jobtype_id" => Jobtype::pluck('id')[$this->faker->numberBetween(1,Jobtype::count()-1)],
          "created_at" => now(),
          "updated_at" => now()
        ];
    }

}
