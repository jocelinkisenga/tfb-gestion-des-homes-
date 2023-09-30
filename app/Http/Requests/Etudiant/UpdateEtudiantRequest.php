<?php

namespace App\Http\Requests\Etudiant;

use Illuminate\Foundation\Http\FormRequest;

class UpdateEtudiantRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'nom' => ['sometimes', 'string'],
			'matricule' => ['sometimes', 'integer'],
			'promotion' => ['sometimes', 'integer'],
			'faculte' => ['sometimes', 'string'],
			'telephone' => ['sometimes', 'string'],
        ];
    }
}
