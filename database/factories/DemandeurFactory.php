<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Demandeur>
 */
class DemandeurFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'noms_demandeur' => $this->faker->name,
            'sexe' => $this->faker->title,
            'datnais' => $this->faker->date,
            'adresse' => $this->faker->address,
            'contact' => $this->faker->phoneNumber,
            'profess' => $this->faker->jobTitle,
            'departement' => $this->faker->word,
            'codcell' => $this->faker->randomDigitNotNull()
        ];
    }
}
