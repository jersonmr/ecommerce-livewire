<?php

namespace App\Livewire\Shop\Lists;

use App\Enums\Filters\ShopFilters;
use App\Livewire\Shop\Filters\PerPageFilter;
use App\Models\Product;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pipeline\Pipeline;
use Livewire\Attributes\On;
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

    #[On('filters-updated')]
    public function onFiltersUpdated(mixed $filters): void
    {
        $key = key($filters);
        $value = $filters[$key];

        session()->put('shop:' . $key, $value);
        $this->gotoPage(1);
    }

    #[On('reset-filters')]
    public function onResetFilters(): void
    {
        $this->resetFilters();

        $this->dispatch('shop-reset-filters');
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
        $products = app(Pipeline::class)
            ->send(Product::query()
                       ->with([
                                  'brand:id,name',
                                  'category:id,name',
                                  'color:id,name',
                                  'size:id,name',
                                  'reviews:id,product_id,rating'
                              ])
                       )
        ->through(collect($this->filters())
            ->map(fn($filter, $value) => ShopFilters::from($value)->create($filter))
            ->values()
            ->all()
        )
        ->thenReturn();

        return $products->paginate(session(key: 'shop:perPage', default: PerPageFilter::DEFAULT_PER_PAGE));
    }

    public function render(): \Illuminate\Contracts\View\View
    {
        return view('livewire.shop.lists.products-list', [
            'products' => $this->getProducts(),
        ]);
    }
}
