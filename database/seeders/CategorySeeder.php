<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::insert([
            ['name' => 'Electronics', 'slug' => 'electronics', 'parent_id' => null],
            ['name' => 'Laptops', 'slug' => 'laptops', 'parent_id' => 1],
            ['name' => 'Smartphones', 'slug' => 'smartphones', 'parent_id' => 1],
        ]);
    }
}
