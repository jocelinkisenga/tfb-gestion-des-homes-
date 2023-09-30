<?php

namespace Database\Factories;

use App\Models\Reservation;
use App\Models\Room;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReservationFactory extends Factory
{
    public function definition(): array
    {
        $etudiants = Reservation::pluck('id')->toArray();
        $chambres = Room::pluck('id')->toArray();
        return [
            'idChambre' => $this->faker->randomElement($chambres),
			'IdEtudiant' => $this->faker->randomElement($etudiants),
			'lettreMotivation' => $this->faker->file(),
			'preuvePaiement' => $this->faker->file(),
        ];
    }
}
