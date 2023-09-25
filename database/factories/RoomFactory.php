<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class RoomFactory extends Factory
{
    public function definition(): array
    {
        return [
            'numberRoom' => $this->faker->randomNumber(),
			'HomeName' => $this->faker->firstName(),
			'places' => $this->faker->randomNumber(),
			'status' => $this->faker->boolean(),
			'image_path' => $this->faker->firstName(),
			'description' => $this->faker->text(),
        ];
    }
}
