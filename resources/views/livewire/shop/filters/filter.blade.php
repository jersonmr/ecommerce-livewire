<x-card-filter :title="$title">
    <ul class="list-group list-group-flush">
        @foreach($models as $model)
            <li
                wire:key="{{ $alias }}-filter-{{ $model->id }}"
                class="list-group-item"
            >
                <input type="checkbox"
                       value="{{ $model->id }}"
                       id="{{ $alias }}-filter-{{ $model->id }}"
                       wire:model.live="selectedModels"
                />
                <label class="form-check-label"
                       for="{{ $alias }}-filter-{{ $model->id }}"
                >
                    {{ $model->name }}
                </label>
                <span class="badge bg-primary rounded-pill float-end">{{ $model->products_count }}</span>
            </li>
        @endforeach
    </ul>
</x-card-filter>
