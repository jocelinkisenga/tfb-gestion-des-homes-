<?php

namespace App\Http\Requests\EtudiantUnilu;

use Illuminate\Foundation\Http\FormRequest;

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
}
