<?php

namespace Database\Factories;

use App\Models\Task;
use Illuminate\Database\Eloquent\Factories\Factory;

class TaskFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Task::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
          "project_name" => $this->faker->name,
          "location" => $this->faker->address,
          "min_budget" => $this->faker->randomDigit(),
          "max_budget" => $this->faker->randomDigit(),
          "skills" => $this->faker->name,
          "project_description" => $this->faker->paragraph(2),
          "created_at" => now(),
          "updated_at" => now()
        ];
    }
}
