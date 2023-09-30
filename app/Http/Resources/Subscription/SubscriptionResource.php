<?php

namespace App\Http\Resources\Subscription;

use Illuminate\Http\Resources\Json\JsonResource;

class SubscriptionResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'id' => $this->id,
			'user_id' => $this->user_id,
			'amount' => $this->amount,
			'date_subsciption' => dateTimeFormat($this->date_subsciption),
			'status' => $this->status,
        ];
    }
}
