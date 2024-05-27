<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{

    public function definition(): array
    {
        return [
        'title' => $this->faker->text(10),
        'intro' => $this->faker->paragraph(3),
        'author' => $this->faker->name(),
        'content' => $this->faker->paragraph(30),
        ];
    }
}
