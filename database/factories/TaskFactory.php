<?php

namespace Database\Factories;

use App\Models\Task;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

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
          'name'=> $this->faker->paragraph,
          'is_done' => $this->faker->randomElement([1, 0]),
        ];
    }}
