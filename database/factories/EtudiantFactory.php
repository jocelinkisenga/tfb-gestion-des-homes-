<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EtudiantFactory extends Factory
{
    public function definition(): array
    {
        return [
            'nom' => $this->faker->firstName(),
			'matricule' => $this->faker->randomNumber(),
			'promotion' => $this->faker->randomNumber(),
			'faculte' => $this->faker->firstName(),
			'telephone' => $this->faker->firstName(),
        ];
    }
}
