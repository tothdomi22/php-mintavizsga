<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{

    public function definition(): array
    {
        return [
            'title' => $this->faker->text(10),
            'desc' => $this->faker->text(20),
            'user_id' => $this->faker->numberBetween(1,2),
        ];
    }
}
