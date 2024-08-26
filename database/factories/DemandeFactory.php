<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Demande>
 */
class DemandeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'datdem' => $this->faker->date,
            'motif' => $this->faker->sentence(6),
            'heuredem' => $this->faker->time,
            'montdema' => $this->faker->numberBetween(10, 100000),
            'num_demandeur' => $this->faker->randomDigitNotNull()
        ];
    }
}
