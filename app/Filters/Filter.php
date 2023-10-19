<?php

namespace App\Filters;

use Illuminate\Database\Eloquent\Builder;

abstract class Filter
{
    public function __construct(protected readonly array|string|int|null $filter) {}

    abstract public function handle(Builder $items, \Closure $next): Builder;
}
