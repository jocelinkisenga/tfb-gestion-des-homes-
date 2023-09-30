<?php

namespace App\Models;

use App\Filters\EtudiantUniluFilters;
use Essa\APIToolKit\Filters\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class EtudiantUnilu extends Model
{
    use HasFactory, Filterable;
    public $table = "etudiantUnilus";
    protected string $default_filters = EtudiantUniluFilters::class;

    /**
     * Mass-assignable attributes.
     *
     * @var array
     */
    protected $fillable = [
        'nom',
		'matricule',
		'promotion',
		'faculte',
		'genre',
		'date_subsciption',
		'status',
        "password"
    ];


}
