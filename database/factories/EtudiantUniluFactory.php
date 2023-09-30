<?php

namespace Database\Factories;

use App\Models\EtudiantUnilu;
use Hash;
use Illuminate\Database\Eloquent\Factories\Factory;


class EtudiantUniluFactory extends Factory
{

    /**
     * Summary of model
     * @var
     */
   public $table = "etudiantUnilus";

    public function definition(): array
    {

        return [
            'nom' => $this->faker->firstName(),
			'matricule' => $this->faker->randomNumber(),
			'promotion' => $this->faker->firstName(),
			'faculte' => $this->faker->firstName(),
			'genre' => $this->faker->firstName(),
			'date_subsciption' => $this->faker->dateTime(),
			'status' => $this->faker->boolean(),
            "password" => Hash::make("unilu la meilleure")
        ];

    }
}
