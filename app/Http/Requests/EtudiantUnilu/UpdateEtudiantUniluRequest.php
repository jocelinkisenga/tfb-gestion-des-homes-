<?php

namespace App\Http\Requests\EtudiantUnilu;

use Illuminate\Foundation\Http\FormRequest;

class UpdateEtudiantUniluRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'nom' => ['sometimes', 'string'],
			'matricule' => ['sometimes', 'string'],
			'promotion' => ['sometimes', 'string'],
			'faculte' => ['sometimes', 'string'],
			'genre' => ['sometimes', 'string'],
			'date_subsciption' => ['sometimes', 'date'],
			'status' => ['sometimes', 'boolean'],
        ];
    }
}
