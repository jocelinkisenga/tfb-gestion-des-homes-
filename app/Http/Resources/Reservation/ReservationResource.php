<?php

namespace App\Http\Resources\Reservation;

use Illuminate\Http\Resources\Json\JsonResource;

class ReservationResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'id' => $this->id,
            'idChambre' => $this->idChambre,
			'IdEtudiant' => $this->IdEtudiant,
			'lettreMotivation' => $this->lettreMotivation,
			'preuvePaiement' => $this->preuvePaiement,
            'created_at' => dateTimeFormat($this->created_at),
            'updated_at' => dateTimeFormat($this->updated_at),
        ];
    }
}
