<?php

namespace App\Livewire\Shop\Filters;

use Illuminate\View\View;
use Livewire\Component;

class Filter extends Component
{
    public function render(): View
    {
        return view('livewire.shop.filters.filter');
    }
}
