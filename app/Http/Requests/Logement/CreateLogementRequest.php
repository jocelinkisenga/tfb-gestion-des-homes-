<?php

namespace App\Http\Requests\Logement;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class CreateLogementRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'nom' => ['required', 'string'],
			'nombreChambre' => ['required', 'integer'],
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
