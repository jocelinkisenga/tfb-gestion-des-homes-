<?php

namespace App\Http\Requests\Reservation;

use Illuminate\Foundation\Http\FormRequest;

class CreateReservationRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'idChambre' => ['required'],
			'IdEtudiant' => ['required'],
			'lettreMotivation' => ['required'],
			'preuvePaiement' => ['required'],
        ];
    }
}
