<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pastor>
 */
class PastorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nompast' => $this->faker->name,
            'postnom' => $this->faker->lastName,
            'prenom' => $this->faker->firstName,
            'fonction' => $this->faker->word,
            'contact' => $this->faker->phoneNumber,
            'codserv' => $this->faker->randomDigitNotNull()
        ];
    }
}
