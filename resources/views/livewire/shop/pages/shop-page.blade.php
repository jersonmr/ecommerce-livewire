<div class="container-fluid p-5">
    <div class="row">
        {{-- Sidebar filters --}}
        <div
            style="height: 90vh; !important;"
            class="col-sm-12 col-md-4 col-lg-4 col-xl-3 overflow-auto"
        >
            <livewire:shop.filters.category-filter />

            <div class="my-4"></div>

            <livewire:shop.filters.price-filter />

            <div class="my-4"></div>

            <livewire:shop.filters.color-filter />

            <div class="my-4"></div>

            <livewire:shop.filters.size-filter />

            <div class="my-4"></div>

            <livewire:shop.filters.brand-filter />

            <div class="my-4"></div>

            <livewire:shop.filters.rating-filter />
        </div>

        {{-- Products --}}
        <div class="col-sm-12 col-md-8 col-lg-8 col-xl-9">
            <div class="row">
                <div class="col-auto mb-3">
                    <button class="btn btn-danger" wire:click="resetFilters">
                        <i class="fas fa-undo"></i>
                    </button>
                </div>

                <div class="col-auto">
                    <livewire:shop.filters.per-page-filter />
                </div>

                <div class="col">
                    <livewire:shop.filters.search-filter />
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <livewire:shop.lists.products-list />
                </div>
            </div>
        </div>
    </div>
</div>
