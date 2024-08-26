<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Lancer>
 */
class LancerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'datelan' => $this->faker->date,
            'datlimit' => $this->faker->date,
            'heure' => $this->faker->time,
            'motif' => $this->faker->sentence(6, true),
            'montbesoin' => $this->faker->randomDigitNotNull(),
            'matri' => $this->faker->randomDigitNotNull(),
            'numaid' => $this->faker->randomDigitNotNull()
        ];
    }
}
