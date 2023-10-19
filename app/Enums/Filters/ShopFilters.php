<?php

namespace App\Enums\Filters;

use App\Filters\Filter;
use App\Filters\Shop\CategoryFilter;
use App\Filters\Shop\PriceFilter;
use App\Filters\Shop\RatingFilter;
use App\Filters\Shop\SearchFilter;

enum ShopFilters: string
{
    case Category = 'category';
    case Search = 'search';
    case Price = 'price';
    case Rating = 'rating';

    public function create(array|string|int|null $filter): Filter
    {
        return match ($this) {
            self::Category => new CategoryFilter($filter),
            self::Search => new SearchFilter($filter),
            self::Price => new PriceFilter($filter),
            self::Rating => new RatingFilter($filter),
        };
    }
}
