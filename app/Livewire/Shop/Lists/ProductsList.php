<?php

namespace App\Livewire\Shop\Lists;

use App\Models\Product;
use Illuminate\Pagination\LengthAwarePaginator;
use Livewire\Component;
use Livewire\WithPagination;

class ProductsList extends Component
{
    use WithPagination;

    protected string $paginationTheme = 'bootstrap';

    private array $filters = [
        'category' => [],
    ];

    public function mount(): void
    {
        $this->resetFilters();
    }

    private function resetFilters(): void
    {
        collect($this->filters)
            ->each(fn($filter, $key) => session()->forget('shop:' . $key));

        session()->forget('shop:perPage');

        $this->gotoPage(1);
    }

    private function filters(): array
    {
        return collect($this->filters)
            ->map(fn($filter, $key) => session(key: 'shop:' . $key, default: $filter))
            ->toArray();
    }

    public function getProducts(): LengthAwarePaginator
    {
        return Product::query()
            ->with([
                'brand:id,name',
                'category:id,name',
                'color:id,name',
                'size:id,name',
                'reviews:id,product_id,rating'
                   ])
            ->ray()
            ->paginate(session(key: 'shop:perPage', default: 4));
    }

    public function render(): \Illuminate\Contracts\View\View
    {
        return view('livewire.shop.lists.products-list', [
            'products' => $this->getProducts(),
        ]);
    }
}
