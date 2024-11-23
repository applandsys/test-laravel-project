<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use Carbon\Carbon;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public readonly string $time;

    public function __construct()
    {
        $this->time = Carbon::now()->format('Y-m-d H:i:s');
    }

    public function run(): void
    {
        Product::insert([
            ['name' => 'Product 1', 'slug' => 'product-1', 'price' => 100.00, 'created_at' =>  $this->time ],
            ['name' => 'Product 2', 'slug' => 'product-2', 'price' => 150.00, 'created_at' =>  $this->time ],
            ['name' => 'Product 3', 'slug' => 'product-3', 'price' => 200.00, 'created_at' =>  $this->time ],
        ]);
    }
}
