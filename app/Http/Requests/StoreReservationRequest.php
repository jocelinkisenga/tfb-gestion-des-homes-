<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreReservationRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            "room_id" => "required|integer",
            "fullName" => "required|string|max:30",
            "email" => "required|email",
            "telephone" => "required",
            "promotion" => "required",
            "faculte" => "required",
            "genre" => "required"
        ];
    }
}
