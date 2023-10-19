<?php

namespace App\Filters\Shop;

use App\Filters\Filter;
use Illuminate\Database\Eloquent\Builder;

final class RatingFilter extends Filter
{

    public function handle(Builder $items, \Closure $next): Builder
    {
        if (!$this->filter) {
            return $next($items);
        }

        $items->whereHas('reviews', function (Builder $query) {
            $query->where('rating', '>=', $this->filter);
        });

        return $next($items);
    }
}
