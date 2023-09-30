<?php

namespace App\Http\Requests\Reservation;

use Illuminate\Foundation\Http\FormRequest;

class UpdateReservationRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'idChambre' => ['sometimes'],
			'IdEtudiant' => ['sometimes'],
			'lettreMotivation' => ['sometimes'],
			'preuvePaiement' => ['sometimes'],
        ];
    }
}
