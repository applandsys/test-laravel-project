<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ProductReview;

class ProductReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProductReview::insert([
            ['product_id' => 1, 'user_id' => 1, 'comment' => 'Great product!', 'rating' => 5],
            ['product_id' => 2, 'user_id' => 2, 'comment' => 'Good value for money.', 'rating' => 4],
        ]);
    }
}
