<?php

namespace App\Http\Requests\Subscription;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSubscriptionRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'room_id' => ['sometimes', 'integer'],
			'user_id' => ['sometimes', 'integer'],
			'amount' => ['sometimes', 'integer'],
			'date_subsciption' => ['sometimes', 'date'],
			'status' => ['sometimes', 'boolean'],
        ];
    }
}
