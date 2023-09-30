<?php

namespace App\Http\Requests\Logement;

use Illuminate\Foundation\Http\FormRequest;

class CreateLogementRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'nom' => ['required', 'string'],
			'nombreChambre' => ['required', 'integer'],
        ];
    }
}
