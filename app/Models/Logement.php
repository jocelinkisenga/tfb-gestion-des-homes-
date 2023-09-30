<?php

namespace App\Models;

use App\Filters\LogementFilters;
use Essa\APIToolKit\Filters\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Logement extends Model
{
    use HasFactory, Filterable;

    protected string $default_filters = LogementFilters::class;

    /**
     * Mass-assignable attributes.
     *
     * @var array
     */
    protected $fillable = [
        'nom',
		'nombreChambre',
    ];

public function rooms () : HasMany {
    return $this->hasMany(Room::class);
}
}
