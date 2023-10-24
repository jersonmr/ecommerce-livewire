<?php

namespace App\Livewire\Shop\Filters;

use App\Models\Color;
use App\Traits\Livewire\WithModelsFilter;
use App\Traits\Livewire\WithMultipleFilter;

class ColorFilter extends Filter
{
    use WithMultipleFilter;
    use WithModelsFilter;

    public string $title = 'Colors';
    protected string $eloquentModel = Color::class;
}
