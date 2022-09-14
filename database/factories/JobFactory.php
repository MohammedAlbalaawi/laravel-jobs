<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string => fake()-> mixed>
     */
    public function definition()
    {
        return [
            'user_id' => '1',
            'name' => fake()->jobTitle,
            'description' => fake()->text($maxNbChars = 50),
            'city' => fake()->city,
            'job_type' => 'Full Time',
            'salary' => fake()->numberBetween(300, 1000),
            'degree' => 'BA',
            'experience' => fake()->numberBetween(1, 5),
            'deadline' => fake()->date('Y-m-d'),
        ];
    }
}
