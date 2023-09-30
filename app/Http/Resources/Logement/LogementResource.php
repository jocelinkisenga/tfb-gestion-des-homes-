<?php

namespace App\Http\Resources\Logement;

use Illuminate\Http\Resources\Json\JsonResource;

class LogementResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'id' => $this->id,
            'nom' => $this->nom,
			'nombreChambre' => $this->nombreChambre,
            'created_at' => dateTimeFormat($this->created_at),
            'updated_at' => dateTimeFormat($this->updated_at),
        ];
    }
}
