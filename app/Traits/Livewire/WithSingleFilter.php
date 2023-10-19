<?php

namespace App\Traits\Livewire;

use App\Livewire\Shop\Filters\Filter;
use Livewire\Attributes\On;

/**
 * @mixin Filter
 * @property array $filter
 */
trait WithSingleFilter
{
    #[On('shop-reset-filters')]
    public function onResetFilters(): void
    {
        $this->filter = [];
    }

    public function updatedFilter(): void
    {
        $this->applyFilters($this->filter);
    }
}
