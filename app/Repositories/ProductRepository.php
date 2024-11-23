<?php

namespace App\Repositories;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
class ProductRepository implements ProductRepositoryInterface
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    public function getCategoryBySlug(string $slug)
    {
        return Category::where('slug', $slug)->first();
    }

    public function getCategoryProducts(string $slug, string $sort = null)
{
    $category = $this->getCategoryBySlug($slug);

    if (!$category) {
        return null;
    }

    $products = $category->products();

    // Apply sorting
    switch ($sort) {
        case 'best_sell':
            // Replace this with a valid column or logic for "best-sell"
            $products->withCount(['orderDetails as total_sales' => function ($query) {
                $query->select(DB::raw('SUM(quantity)'));
            }])->orderBy('total_sales', 'desc');
            break;
        case 'top_rated':
            $products->withAvg('reviews', 'rating')->orderBy('reviews_avg_rating', 'desc');
            break;
        case 'price_high_to_low':
            $products->orderBy('price', 'desc');
            break;
        case 'price_low_to_high':
            $products->orderBy('price', 'asc');
            break;
        default:
            $products->orderBy('name', 'asc');
    }

    return $products->paginate(10);
}


}
