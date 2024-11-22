<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ProductCategory;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProductCategory::insert([
            ['product_id' => 1, 'category_id' => 2],
            ['product_id' => 2, 'category_id' => 3],
            ['product_id' => 3, 'category_id' => 2],
        ]);
    }
}
