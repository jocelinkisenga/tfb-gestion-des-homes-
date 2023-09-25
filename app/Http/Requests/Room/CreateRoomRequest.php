<?php

namespace App\Http\Requests\Room;

use Illuminate\Foundation\Http\FormRequest;

class CreateRoomRequest extends FormRequest
{
    /**
     * Summary of authorize
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }


    /**
     * Summary of rules
     * @return array
     */
    public function rules(): array
    {
        return [
            'numberRoom' => ['required', 'integer'],
			'HomeName' => ['required', 'string'],
			'places' => ['required', 'integer'],
			'status' => ['required', 'boolean'],
			'image_path' => ['required', 'image'],
			'description' => ['required', 'string'],
        ];
    }
}
