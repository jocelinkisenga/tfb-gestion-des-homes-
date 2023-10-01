<?php

namespace App\Http\Requests\Etudiant;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

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

    public function failedValidation(Validator $validator) {
        throw new HttpResponseException(response()->json([
              'success' => false,
              'message' => 'validation errors',
              $validator->errors()
        ]));
    }
}
