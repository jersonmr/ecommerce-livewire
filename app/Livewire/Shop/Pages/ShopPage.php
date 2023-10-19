<?php

namespace App\Livewire\Shop\Pages;

use App\Models\Product;
use Livewire\Component;

class ShopPage extends Component
{
    public function resetFilters(): void
    {
        // TODO: reset shop filters
    }

    public function render(): \Illuminate\Contracts\View\View
    {
        return view('livewire.shop.pages.shop-page');
    }
}
