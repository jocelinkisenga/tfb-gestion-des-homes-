<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class RservationFactory extends Factory
{
    public function definition(): array
    {
        return [
            'idChambre' => $this->faker->randomNumber(),
			'IdEtudiant' => $this->faker->text(),
			'lettreMotivation' => $this->faker->text(),
			'preuvePaiement' => $this->faker->text(),
        ];
    }
}
