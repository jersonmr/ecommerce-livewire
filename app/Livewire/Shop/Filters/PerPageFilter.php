<?php

namespace App\Livewire\Shop\Filters;

use App\Traits\Livewire\WithSingleFilter;
use Livewire\Component;

class PerPageFilter extends Filter
{
    use WithSingleFilter;

    public array $filter = [
        'perPage' => self::DEFAULT_PER_PAGE,
    ];

    const DEFAULT_PER_PAGE = 4;

    public function render(): \Illuminate\Contracts\View\View
    {
        return view('livewire.shop.filters.per-page-filter', [
            'options' => [4, 6, 8, 12, 16, 20],
        ]);
    }
}
