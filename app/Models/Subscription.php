<?php

namespace App\Models;

use App\Filters\SubscriptionFilters;
use Essa\APIToolKit\Filters\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Subscription extends Model
{
    use HasFactory, Filterable;

    protected string $default_filters = SubscriptionFilters::class;

    /**
     * Mass-assignable attributes.
     *
     * @var array
     */
    protected $fillable = [
        'room_id',
		'user_id',
		'amount',
		'date_subsciption',
		'status',
    ];


}
