<div class="row">
    @forelse($products as $product)
        <div class="col-4 mb-3" wire:key="product-{{ $product->id }}">
            <x-product-card :product="$product" />
        </div>
    @empty
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Ups!</strong> There's no products to show.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endforelse

    <div class="col-12">
        {{ $products->links() }}
    </div>
</div>
