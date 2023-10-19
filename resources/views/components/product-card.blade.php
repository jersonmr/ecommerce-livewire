<div class="card h-100">
    <img src="{{ $product->image }}" class="card-img-top" alt="{{ $product->name }}">

    <div class="card-body">
        <h5 class="card-title">{{ $product->name }}</h5>
    </div>

    {{-- category, color, size, price, brand --}}
    <ul class="list-group list-group-flush">
        <li class="list-group-item">
            <div class="d-flex justify-content-between">
                <div class="fw-bold">{{ __("Category") }}</div>
                <div>{{ $product->category->name }}</div>
            </div>
        </li>
        <li class="list-group-item">
            <div class="d-flex justify-content-between">
                <div class="fw-bold">{{ __("Color") }}</div>
                <div>{{ $product->color->name }}</div>
            </div>
        </li>
        <li class="list-group-item">
            <div class="d-flex justify-content-between">
                <div class="fw-bold">{{ __("Size") }}</div>
                <div>{{ $product->size->name }}</div>
            </div>
        </li>
        <li class="list-group-item">
            <div class="d-flex justify-content-between">
                <div class="fw-bold">{{ __("Price") }}</div>
                <div>{{ $product->price }} €</div>
            </div>
        </li>
        <li class="list-group-item">
            <div class="d-flex justify-content-between">
                <div class="fw-bold">{{ __("Brand") }}</div>
                <div>{{ $product->brand->name }}</div>
            </div>
        </li>
    </ul>

    {{-- Rating --}}
    <div class="card-footer">
        <div class="d-flex justify-content-between">
            <div class="fw-bold">{{ __("Rating") }}</div>
            <div>
                @for($i = 1; $i <= 5; $i++)
                    <i class="fas fa-star {{ $i <= $product->reviews->avg('rating') ? 'text-warning' : 'text-gray-300' }}"></i>
                @endfor
            </div>
        </div>
    </div>
</div>
