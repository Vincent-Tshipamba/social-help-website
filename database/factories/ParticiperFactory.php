<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Participer>
 */
class ParticiperFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'datcontribu' => $this->faker->date,
            'motifcontr' => $this->faker->sentence,
            'heure' => $this->faker->time,
            'montantcontr' => $this->faker->numberBetween(100, 100000),
            'modeparticipat' => $this->faker->word,
            'observation' => $this->faker->sentence(10),
            'numaid' => $this->faker->randomDigitNotNull(),
            'iddonat' => $this->faker->randomDigitNotNull(),
        ];
    }
}
