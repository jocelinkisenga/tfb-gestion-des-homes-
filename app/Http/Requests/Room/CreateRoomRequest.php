<?php

namespace App\Http\Requests\Room;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

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

    public function failedValidation(Validator $validator) {
        throw new HttpResponseException(response()->json([
              'success' => false,
              'message' => 'validation errors',
              $validator->errors()
        ]));
    }
}
