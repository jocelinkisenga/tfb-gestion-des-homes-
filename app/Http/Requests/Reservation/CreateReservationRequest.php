<?php

namespace App\Http\Requests\Reservation;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;
use Illuminate\Contracts\Validation\Validator;
class CreateReservationRequest extends FormRequest
{


    /**
     * Summary of rules
     * @return array
     */
    public function rules(): array
    {
        return [
            'idChambre' => ['required'],
			'IdEtudiant' => ['required'],
			'lettreMotivation' => ['nullable'],
			'preuvePaiement' => ['nullable'],
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
