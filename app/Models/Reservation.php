<?php

namespace App\Models;

use App\Filters\ReservationFilters;
use Essa\APIToolKit\Filters\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Reservation extends Model
{
    use HasFactory, Filterable;

    protected string $default_filters = ReservationFilters::class;

    /**
     * Mass-assignable attributes.
     *
     * @var array
     */
    protected $fillable = [
        'idChambre',
		'IdEtudiant',
		'lettreMotivation',
		'preuvePaiement',
        'status'
    ];

	public function idChambre(): \Illuminate\Database\Eloquent\Relations\BelongsTo
	{
		return $this->belongsTo(\App\Models\IdChambre::class);
	}

}
