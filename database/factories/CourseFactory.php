<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CourseFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => $this->faker->sentence(3),
            'description' => $this->faker->paragraph(),
            'duration' => $this->faker->numberBetween(10, 100),
            'starts_at' => $this->faker->date(),
        ];
    }
}
