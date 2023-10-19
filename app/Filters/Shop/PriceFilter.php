<?php

namespace App\Filters\Shop;

use App\Filters\Filter;
use Illuminate\Database\Eloquent\Builder;

class PriceFilter extends Filter
{

    public function handle(Builder $items, \Closure $next): Builder
    {
        if (!$this->filter) {
            return $next($items);
        }

        $min = $this->filter['min'] ?? 0;
        $max = $this->filter['max'] ?? 0;

        if ($min && $max) {
            $items->whereBetween(column: 'price', values: [$min, $max]);
        } elseif ($min) {
            $items->where(column: 'price', operator: '>=', value: $min);
        } elseif ($max) {
            $items->where(column: 'price', operator: '<=', value: $max);
        }

        return $next($items);
    }
}
