<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoryProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = Category::all();
        $products = Product::all();

        $products->each(function ($product) use ($categories) {
            $product->categories()->attach(
                $categories->random(rand(1, 10))->pluck('id')->toArray()
            );
        });
    }
}
