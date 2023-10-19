<?php

namespace App\Livewire\Shop\Filters;

use App\Traits\Livewire\WithSingleFilter;
use Livewire\Component;

class PriceFilter extends Filter
{
    use WithSingleFilter;

    public string $title = 'Price';

    public array $filter = [
        'price' => [
            'min' => 0,
            'max' => 0,
        ],
    ];

    public function render(): \Illuminate\Contracts\View\View
    {
        return view('livewire.shop.filters.price-filter');
    }
}
