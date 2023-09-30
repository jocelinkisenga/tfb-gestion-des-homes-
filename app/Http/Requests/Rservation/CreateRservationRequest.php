<?php

namespace App\Http\Requests\Rservation;

use Illuminate\Foundation\Http\FormRequest;

class CreateRservationRequest extends FormRequest
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
