<?php

namespace App\Http\Requests\Room;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRoomRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'numberRoom' => ['sometimes', 'integer'],
			'HomeName' => ['sometimes', 'string'],
			'places' => ['sometimes', 'integer'],
			'status' => ['sometimes', 'boolean'],
			'image_path' => ['sometimes', 'image'],
			'description' => ['sometimes', 'string'],
        ];
    }
}
