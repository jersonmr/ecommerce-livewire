<?php

namespace App\Enums\Filters;

use App\Filters\Filter;
use App\Filters\Shop\CategoryFilter;

enum ShopFilters: string
{
    case Category = 'category';

    public function create(array|string|int|null $filter): Filter
    {
        return match ($this) {
            self::Category => new CategoryFilter($filter),
        };
    }
}
