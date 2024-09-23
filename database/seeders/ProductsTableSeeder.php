<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 100; $i++) {
            $newProduct = new Product();

            $newProduct->name = $faker->words(3, true);
            $newProduct->description = $faker->sentence();
            $newProduct->price = $faker->randomFloat(2, 3, 10000);
            $newProduct->available = $faker->boolean();
            $newProduct->quantity = $faker->randomNumber(2, false);

            $newProduct->save();
        }
    }
}
