<?php

namespace App\Http\Requests\Etudiant;

use Illuminate\Foundation\Http\FormRequest;

class CreateEtudiantRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'nom' => ['required', 'string'],
			'matricule' => ['required', 'integer'],
			'promotion' => ['required', 'integer'],
			'faculte' => ['required', 'string'],
			'telephone' => ['required', 'string'],
        ];
    }
}
