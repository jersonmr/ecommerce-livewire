<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $macbookPro = Product::factory()->create([
                                                     'name' => 'MacBook Pro 13',
                                                     'slug' => 'macbook-pro-13',
                                                     'price' => 1299,
                                                     'image' => '/images/products/macbook-pro-13.jpg',
                                                     'category_id' => 1,
                                                     'brand_id' => 1,
                                                     'color_id' => 1,
                                                     'size_id' => 3,
                                                 ]);

        // rating 5
        $macbookPro->reviews()->createMany(
            Review::factory()->count(10)->make([
                                                   'rating' => 5
                                               ])->toArray()
        );

        $macbookPro = Product::factory()->create([
                                                     'name' => 'MacBook Pro 16',
                                                     'slug' => 'macbook-pro-16',
                                                     'price' => 2399,
                                                     'image' => '/images/products/macbook-pro-16.jpg',
                                                     'category_id' => 1,
                                                     'brand_id' => 1,
                                                     'color_id' => 1,
                                                     'size_id' => 3,
                                                 ]);

        // rating between 4 and 5
        $macbookPro->reviews()->createMany(
            Review::factory()->count(10)->make([
                                                   'rating' => random_int(4, 5),
                                               ])->toArray()
        );

        $iPhone = Product::factory()->create([
                                                 'name' => 'iPhone 11 Pro',
                                                 'slug' => 'iphone-11-pro',
                                                 'price' => 699,
                                                 'image' => '/images/products/iphone-11-pro.jpg',
                                                 'category_id' => 2,
                                                 'brand_id' => 1,
                                                 'color_id' => 1,
                                                 'size_id' => 1,
                                             ]);

        // rating between 4 and 5
        $iPhone->reviews()->createMany(
            Review::factory()->count(10)->make([
                                                   'rating' => random_int(4, 5),
                                               ])->toArray()
        );

        $iPhone = Product::factory()->create([
                                                 'name' => 'iPhone 12 Pro',
                                                 'slug' => 'iphone-12-pro',
                                                 'price' => 999,
                                                 'image' => '/images/products/iphone-12-pro.jpg',
                                                 'category_id' => 2,
                                                 'brand_id' => 1,
                                                 'color_id' => 1,
                                                 'size_id' => 1,
                                             ]);

        $iPhone->reviews()->createMany(
            Review::factory()->count(10)->make([
                                                   'rating' => random_int(4, 5),
                                               ])->toArray()
        );

        $iPad = Product::factory()->create([
                                               'name' => 'iPad Pro 12.9',
                                               'slug' => 'ipad-pro-12.9',
                                               'price' => 1099,
                                               'image' => '/images/products/ipad-12-pro.jpg',
                                               'category_id' => 3,
                                               'brand_id' => 1,
                                               'color_id' => 1,
                                               'size_id' => 2,
                                           ]);

        // rating between 3 and 5
        $iPad->reviews()->createMany(
            Review::factory()->count(10)->make([
                                                   'rating' => random_int(3, 5),
                                               ])->toArray()
        );

        $iPad = Product::factory()->create([
                                               'name' => 'iPad Pro 11',
                                               'slug' => 'ipad-pro-11',
                                               'price' => 799,
                                               'image' => '/images/products/ipad-11-pro.jpg',
                                               'category_id' => 3,
                                               'brand_id' => 1,
                                               'color_id' => 1,
                                               'size_id' => 2,
                                           ]);

        // rating between 3 and 5
        $iPad->reviews()->createMany(
            Review::factory()->count(10)->make([
                                                   'rating' => random_int(3, 5),
                                               ])->toArray()
        );

        $airPods = Product::factory()->create([
                                                  'name' => 'AirPods Pro',
                                                  'slug' => 'airpods-pro',
                                                  'price' => 249,
                                                  'image' => '/images/products/airpods-pro.jpg',
                                                  'category_id' => 6,
                                                  'brand_id' => 1,
                                                  'color_id' => 1,
                                                  'size_id' => 1,
                                              ]);

        // rating between 2 and 4
        $airPods->reviews()->createMany(
            Review::factory()->count(10)->make([
                                                   'rating' => random_int(2, 4),
                                               ])->toArray()
        );

        $galaxy = Product::factory()->create([
                                                 'name' => 'Galaxy S21 Ultra',
                                                 'slug' => 'galaxy-s21-ultra',
                                                 'price' => 1199,
                                                 'image' => '/images/products/galaxy-s21-ultra.jpg',
                                                 'category_id' => 2,
                                                 'brand_id' => 2,
                                                 'color_id' => 3,
                                                 'size_id' => 2,
                                             ]);

        // rating between 3 and 5
        $galaxy->reviews()->createMany(
            Review::factory()->count(10)->make([
                                                   'rating' => random_int(3, 5),
                                               ])->toArray()
        );

        // lg monitor
        $lg = Product::factory()->create([
                                             'name' => 'LG 27UL850-W',
                                             'slug' => 'lg-27ul850-w',
                                             'price' => 499,
                                             'image' => '/images/products/lg-27ul850-w.jpg',
                                             'category_id' => 5,
                                             'brand_id' => 3,
                                             'color_id' => 5,
                                             'size_id' => 5,
                                         ]);

        // rating between 4 and 5
        $lg->reviews()->createMany(
            Review::factory()->count(10)->make([
                                                   'rating' => random_int(4, 5),
                                               ])->toArray()
        );

        $iMac = Product::factory()->create([
                                               'name' => 'iMac 27',
                                               'slug' => 'imac-27',
                                               'price' => 1799,
                                               'image' => '/images/products/imac-27.jpg',
                                               'category_id' => 4,
                                               'brand_id' => 1,
                                               'color_id' => 6,
                                               'size_id' => 4,
                                           ]);

        // rating between 4 and 5
        $iMac->reviews()->createMany(
            Review::factory()->count(10)->make([
                                                   'rating' => random_int(4, 5),
                                               ])->toArray()
        );

        $amd = Product::factory()->create([
                                              'name' => 'AMD Ryzen 9 5950X',
                                              'slug' => 'amd-ryzen-9-5950x',
                                              'price' => 799,
                                              'image' => '/images/products/amd-ryzen-9-5950x.jpg',
                                              'category_id' => 4,
                                              'brand_id' => 4,
                                              'color_id' => 1,
                                              'size_id' => 4,
                                          ]);

        // rating between 2 and 4
        $amd->reviews()->createMany(
            Review::factory()->count(10)->make([
                                                   'rating' => random_int(2, 4),
                                               ])->toArray()
        );

        // intel cpu
        $i9 = Product::factory()->create([
                                             'name' => 'Intel Core i9-10900K',
                                             'slug' => 'intel-core-i9-10900k',
                                             'price' => 529,
                                             'image' => '/images/products/intel-core-i9-10900k.jpg',
                                             'category_id' => 4,
                                             'brand_id' => 5,
                                             'color_id' => 5,
                                             'size_id' => 4,
                                         ]);

        // rating between 1 and 3
        $i9->reviews()->createMany(
            Review::factory()->count(10)->make([
                                                   'rating' => random_int(1, 3),
                                               ])->toArray()
        );
    }
}
