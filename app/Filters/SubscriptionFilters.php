<?php

namespace App\Filters;

use Essa\APIToolKit\Filters\QueryFilters;

class SubscriptionFilters extends QueryFilters
{
    protected array $allowedFilters = [];

    protected array $columnSearch = [];
}
