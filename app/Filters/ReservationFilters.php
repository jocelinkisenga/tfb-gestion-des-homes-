<?php

namespace App\Filters;

use Essa\APIToolKit\Filters\QueryFilters;

class ReservationFilters extends QueryFilters
{
    protected array $allowedFilters = [];

    protected array $columnSearch = [];
}
