<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = \App\Models\Category::all();
        factory(\App\Models\Product::class, 100)
            ->make()
            ->each(function (\App\Models\Product $product) use ($categories) {
                $product->category_id = $categories->random()->id;
                $product->save();
            });
    }
}
