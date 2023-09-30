<?php

namespace App\Models;

use App\Filters\RservationFilters;
use Essa\APIToolKit\Filters\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Rservation extends Model
{
    use HasFactory, Filterable;

    protected string $default_filters = RservationFilters::class;

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
    ];

	public function idChambre(): \Illuminate\Database\Eloquent\Relations\BelongsTo
	{
		return $this->belongsTo(\App\Models\IdChambre::class);
	}

}
