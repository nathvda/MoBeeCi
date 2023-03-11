<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Rating>
 */
class RatingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'sensitive_rating' => $this->faker->randomNumber(5),
            'population_rating' => $this->faker->randomNumber(5),
            'pmr_rating' => $this->faker->randomNumber(5),
        ];
    }
}
