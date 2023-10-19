<?php

namespace App\Livewire\Shop\Pages;

use Illuminate\View\View;
use Livewire\Component;

class ShopPage extends Component
{
    public function resetFilters(): void
    {
        // TODO: reset shop filters
    }

    public function render(): View
    {
        return view('livewire.shop.pages.shop-page');
    }
}
