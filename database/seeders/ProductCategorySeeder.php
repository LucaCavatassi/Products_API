<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = Product::all();
        $category = Category::all();

        foreach ($products as $product) {
            $product->categories()->attach(
                $category->random(rand(1, 3))->pluck('id')->toArray()
            );
        }
    }
}
