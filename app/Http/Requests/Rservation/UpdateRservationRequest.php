<?php

namespace App\Http\Requests\Rservation;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRservationRequest extends FormRequest
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
