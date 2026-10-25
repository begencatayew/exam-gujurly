<?php

namespace Database\Factories;

use App\Models\Sportsmen;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Sportsmen>
 */
class SportsmenFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->firstName(),
            'surname' => fake()->lastName(),
            'age' => fake()->numberBetween(18, 40),
            'bio' => fake()->sentence(),
        ];
    }
}
