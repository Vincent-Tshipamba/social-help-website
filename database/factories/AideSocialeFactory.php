<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AideSociale>
 */
class AideSocialeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'dataide' => $this->faker->date,
            'motif' => $this->faker->sentence(5),
            'codnat' => $this->faker->randomDigitNotNull(),
            'codanalys' => $this->faker->randomDigitNotNull()
        ];
    }
}
