<?php

namespace App\Http\Requests\EtudiantUnilu;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class CreateEtudiantUniluRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'nom' => ['required', 'string'],
			'matricule' => ['required', 'string'],
			'promotion' => ['required', 'string'],
			'faculte' => ['required', 'string'],
			'genre' => ['required', 'string'],
			'date_subsciption' => ['required', 'date'],
			'status' => ['required', 'boolean'],
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
