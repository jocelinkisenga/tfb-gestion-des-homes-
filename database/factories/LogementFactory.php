<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class LogementFactory extends Factory
{
    public function definition(): array
    {
        return [
            'nom' => $this->faker->firstName(),
			'nombreChambre' => $this->faker->randomNumber(),
        ];
    }
}
