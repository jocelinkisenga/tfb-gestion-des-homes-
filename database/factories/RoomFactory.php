<?php

namespace Database\Factories;

use App\Models\Logement;
use Illuminate\Database\Eloquent\Factories\Factory;

class RoomFactory extends Factory
{
    public function definition(): array
    {
        $logements = Logement::pluck('id')->toArray();
        return [
            'numberRoom' => $this->faker->randomNumber(),
			'id_logement' => $this->faker->randomElement($logements),
			'places' => $this->faker->randomNumber(),
			'status' => $this->faker->boolean(),
			'image_path' => $this->faker->firstName(),
			'description' => $this->faker->text(),
        ];
    }
}
