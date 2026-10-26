<?php

namespace Database\Factories;

use App\Models\SportsmenRandom;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<SportsmenRandom>
 */
class SportsmenRandomFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => fake()->firstName(),
            'surname' => fake()->lastName(),
            'age' => fake()->numberBetween(18, 40),
            'bio' => fake()->paragraph(),
        ];
    }
}
