<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SubscriptionFactory extends Factory
{
    public function definition(): array
    {
        return [
            'room_id' => createOrRandomFactory(\App\Models\Room::class),
			'user_id' => createOrRandomFactory(\App\Models\User::class),
			'amount' => $this->faker->randomNumber(),
			'date_subsciption' => $this->faker->dateTime(),
			'status' => $this->faker->boolean(),
        ];
    }
}
