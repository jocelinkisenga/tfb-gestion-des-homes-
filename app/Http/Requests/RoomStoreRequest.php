<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RoomStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //            'numberRoom' => ['required', 'integer'],
			'HomeName' => ['required', 'string'],
			'places' => ['required', 'integer'],
			'status' => ['required', 'boolean'],
			'image_path' => ['required', 'image'],
			'description' => ['required', 'string'],
        ];
    }
}
