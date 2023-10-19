<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    public function run(): void
    {
        Brand::factory()->create([
                                     'name' => 'Apple',
                                 ]);

        Brand::factory()->create([
                                     'name' => 'Samsung',
                                 ]);

        Brand::factory()->create([
                                     'name' => 'LG',
                                 ]);

        Brand::factory()->create([
                                     'name' => 'AMD',
                                 ]);

        Brand::factory()->create([
                                     'name' => 'Intel',
                                 ]);
    }
}
