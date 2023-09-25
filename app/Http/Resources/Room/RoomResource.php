<?php

namespace App\Http\Resources\Room;

use Illuminate\Http\Resources\Json\JsonResource;

class RoomResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'id' => $this->id,
            'numberRoom' => $this->numberRoom,
			'HomeName' => $this->HomeName,
			'places' => $this->places,
			'status' => $this->status,
			'image_path' => $this->image_path,
			'description' => $this->description,
        ];
    }
}
