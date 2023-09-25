<?php

namespace App\Filters;

use Essa\APIToolKit\Filters\QueryFilters;

class RoomFilters extends QueryFilters
{
    protected array $allowedFilters = [];

    protected array $columnSearch = [];
}
