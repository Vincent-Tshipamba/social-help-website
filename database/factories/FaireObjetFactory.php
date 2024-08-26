<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\FaireObjet>
 */
class FaireObjetFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'datanalys' => $this->faker->date,
            'reponse' => $this->faker->realText,
            'numanalys' => $this->faker->randomDigitNotNull(),
            'numdem' => $this->faker->randomDigitNotNull(),
            'matri' => $this->faker->randomDigitNotNull()
        ];
    }
}
