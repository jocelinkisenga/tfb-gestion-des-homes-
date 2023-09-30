<?php

namespace App\Http\Requests\Logement;

use Illuminate\Foundation\Http\FormRequest;

class UpdateLogementRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'nom' => ['sometimes', 'string'],
			'nombreChambre' => ['sometimes', 'integer'],
        ];
    }
}
