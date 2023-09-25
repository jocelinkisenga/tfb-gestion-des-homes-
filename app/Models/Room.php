<?php

namespace App\Models;

use App\Filters\RoomFilters;
use Essa\APIToolKit\Filters\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


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
		'HomeName',
		'places',
		'status',
		'image_path',
		'description',
    ];


}
