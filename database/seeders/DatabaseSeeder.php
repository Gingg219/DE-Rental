<?php

namespace Database\Seeders;

use App\Models\BookingDetail;
use App\Models\Category;
use App\Models\Discount;
use App\Models\Image;
use App\Models\Manufacture;
use App\Models\Product;
use App\Models\ProductDetail;
use App\Models\Review;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Discount::factory(10)->create();
        Category::factory(3)->create();
        Manufacture::factory(4)->create();
        Product::factory(50)->create();
        User::factory(20)->create();
        Image::factory(100)->create();
        Review::factory(10)->create();
        ProductDetail::factory(10)->create();
    }
}
