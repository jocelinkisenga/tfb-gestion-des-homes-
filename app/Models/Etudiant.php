<?php

namespace App\Models;

use App\Filters\EtudiantFilters;
use Essa\APIToolKit\Filters\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;


class Etudiant extends Authenticatable
{
    public $table = "etudiants";
    use HasFactory, Filterable;
    use HasApiTokens, HasFactory, Notifiable;

    protected string $default_filters = EtudiantFilters::class;

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
		'telephone',
        'role_id',
        'password'
    ];


}
