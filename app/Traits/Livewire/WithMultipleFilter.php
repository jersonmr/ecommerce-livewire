<?php

namespace App\Traits\Livewire;

use App\Livewire\Shop\Filters\Filter;
use Illuminate\Support\Str;
use Livewire\Attributes\On;

/**
 * @mixin Filter
 */
trait WithMultipleFilter
{
    public array $selectedModels = [];

    #[On('shop-reset-filters')]
    public function onResetFilters(): void
    {
        $this->selectedModels = [];
    }

    public function updatedSelectedModels(): void
    {
        $filters = [
            Str::of(class_basename($this->eloquentModel))->lower()->toString() => $this->selectedModels,
        ];

        $this->applyFilters($filters);
    }
}
