<?php

namespace Database\Factories;

use App\Models\Player;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Player>
 */
class PlayerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
            return [
        'first_name' => fake()->firstName('male'),
        'last_name' => fake()->lastName(),
        'position' => fake()->randomElement(['GK', 'DEF', 'M', 'ATT']),
        'jersey_number' => fake()->unique()->numberBetween(1, 99),
        'dob' => fake()->dateTimeBetween('-40 years', '-18 years')->format('Y-m-d'),
        'nationality' => fake()->randomElement(['Belge', 'Français', 'Marocain', 'Néerlandais', 'Italien', 'Brésilien']),
        ];
    }
}
