<?php

namespace App\Livewire\Shop\Filters;

use App\Models\Brand;
use App\Traits\Livewire\WithModelsFilter;
use App\Traits\Livewire\WithMultipleFilter;
use Livewire\Component;

class BrandFilter extends Filter
{
    use WithMultipleFilter;
    use WithModelsFilter;

    public string $title = 'Brand';
    protected string $eloquentModel = Brand::class;
}
