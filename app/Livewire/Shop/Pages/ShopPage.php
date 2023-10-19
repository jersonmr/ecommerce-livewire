<?php

namespace App\Livewire\Shop\Pages;

use App\Livewire\Shop\Lists\ProductsList;
use Livewire\Component;

class ShopPage extends Component
{
    public function resetFilters(): void
    {
        $this->dispatch('reset-filters')->to(ProductsList::class);
    }

    public function render(): \Illuminate\Contracts\View\View
    {
        return view('livewire.shop.pages.shop-page');
    }
}
