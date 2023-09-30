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
     $facultes =   $this->faker->randomElement(['sciences','droit','medecine','psycho','economie','SPA','polythequenique']);
    $genre = $this->faker->randomElement(["M","F"]);
        return [
            'nom' => $this->faker->firstName(),
			'matricule' => $this->faker->randomNumber(5),
			'promotion' => $this->faker->randomDigitNotZero(),
			'faculte' => $facultes,
			'genre' => $genre,
			'date_subsciption' => $this->faker->dateTime(),
			'status' => $this->faker->boolean(),
            "password" => Hash::make("unilu la meilleure")
        ];

    }
}
