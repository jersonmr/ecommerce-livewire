<?php

namespace App\Traits\Livewire;

use App\Livewire\Shop\Filters\Filter;
use Illuminate\Support\Collection;

/**
 * @mixin Filter
 */
trait WithModelsFilter
{
    public function models(): Collection
    {
        return app($this->eloquentModel)->query()
            ->withCount('products')
            ->get();
    }
}
