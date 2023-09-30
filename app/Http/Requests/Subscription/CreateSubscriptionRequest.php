<?php

namespace App\Http\Requests\Subscription;

use Illuminate\Foundation\Http\FormRequest;

class CreateSubscriptionRequest extends FormRequest
{
    public function rules(): array
    {
        return [
			'user_id' => ['required', 'integer'],
			'amount' => ['required', 'integer'],
			'date_subsciption' => ['required', 'date'],
        ];
    }
}
