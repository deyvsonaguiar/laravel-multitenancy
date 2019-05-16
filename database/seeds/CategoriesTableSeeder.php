<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\Category::class, 50)->create([
            'company_id' => 1
        ]);

        factory(\App\Models\Category::class, 50)->create([
            'company_id' => 2
        ]);
    }
}
