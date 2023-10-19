<?php

namespace App\Livewire\Shop\Filters;

use App\Traits\Livewire\WithSingleFilter;
//use Livewire\Attributes\Url;

class SearchFilter extends Filter
{
    use WithSingleFilter;

//    #[Url]
    public $filter = [
        'search' => '',
    ];

    public function render(): \Illuminate\Contracts\View\View
    {
        return view('livewire.shop.filters.search-filter');
    }
}
