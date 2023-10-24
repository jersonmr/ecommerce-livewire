<?php

namespace App\Enums\Filters;

use App\Filters\Filter;
use App\Filters\Shop\BrandFilter;
use App\Filters\Shop\CategoryFilter;
use App\Filters\Shop\ColorFilter;
use App\Filters\Shop\PriceFilter;
use App\Filters\Shop\RatingFilter;
use App\Filters\Shop\SearchFilter;
use App\Filters\Shop\SizeFilter;

enum ShopFilters: string
{
    case Category = 'category';
    case Search = 'search';
    case Price = 'price';
    case Rating = 'rating';
    case Color = 'color';
    case Size = 'size';
    case Brand = 'brand';

    public function create(array|string|int|null $filter): Filter
    {
        return match ($this) {
            self::Category => new CategoryFilter($filter),
            self::Search => new SearchFilter($filter),
            self::Price => new PriceFilter($filter),
            self::Rating => new RatingFilter($filter),
            self::Color => new ColorFilter($filter),
            self::Size => new SizeFilter($filter),
            self::Brand => new BrandFilter($filter),
        };
    }
}
