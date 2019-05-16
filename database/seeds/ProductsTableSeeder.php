<?php

use Illuminate\Database\Seeder;
use App\Models\Product;

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
            ->each(function (Product $product) use ($categories) {
                $tenanId = rand(1,2);
                $category = $categories->where('company_id', $tenanId)->random();
                $product->category_id = $category->id;
                $product->company_id = $tenanId;
                $product->save();
            });
    }
}
