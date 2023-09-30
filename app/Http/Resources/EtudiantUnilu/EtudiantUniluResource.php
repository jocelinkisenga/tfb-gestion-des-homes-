<?php

namespace App\Http\Resources\EtudiantUnilu;

use Illuminate\Http\Resources\Json\JsonResource;

class EtudiantUniluResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'id' => $this->id,
            'nom' => $this->nom,
			'matricule' => $this->matricule,
			'promotion' => $this->promotion,
			'faculte' => $this->faculte,
			'genre' => $this->genre,
			'date_subsciption' => dateTimeFormat($this->date_subsciption),
			'status' => $this->status,
            'created_at' => dateTimeFormat($this->created_at),
            'updated_at' => dateTimeFormat($this->updated_at),
        ];
    }
}
