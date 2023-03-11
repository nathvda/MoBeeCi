<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\accessibility>
 */
class AccessibilityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'pmr' => $this->faker->boolean,
            'sensorial_sensitive' => $this->faker->boolean,
            'population_tolerance' => $this->faker->boolean,
        ];

    }
}
