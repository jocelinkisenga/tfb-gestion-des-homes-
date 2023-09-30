<?php

namespace App\Models;

use App\Filters\RoomFilters;
use Essa\APIToolKit\Filters\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Room extends Model
{
    use HasFactory, Filterable;

    protected string $default_filters = RoomFilters::class;

    /**
     * Mass-assignable attributes.
     *
     * @var array
     */
    protected $fillable = [
        'numberRoom',
		'id_logement',
		'places',
		'status',
		'image_path',
		'description',
    ];

public function logement(): BelongsTo {
    return $this->belongsTo(Logement::class,"id_logement");
}
}
