<?php

namespace App\Repositories;
use App\Http\Resources\ProductCollection;
use App\Http\Resources\ProductResource;
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
        $product_query =  $products->withCount(['orderDetails as total_sales' => function ($query) {
            $query->select(DB::raw('SUM(quantity)'));
        }])->withAvg('reviews', 'rating')->with('categories');

        // Apply sorting
        switch ($sort) {
            case 'best_sell':
                // Replace this with a valid column or logic for "best-sell"
                $product_query->orderBy('total_sales', 'desc');
                break;
            case 'top_rated':
                $product_query->orderBy('reviews_avg_rating', 'desc');
                break;
            case 'price_high_to_low':
                $product_query->orderBy('price', 'desc');
                break;
            case 'price_low_to_high':
                $product_query->orderBy('price', 'asc');
                break;
            default:
                $product_query->orderBy('id', 'asc');
        }


        return new ProductCollection($products->paginate(10));

       // return ProductResource::collection($products->paginate(10));  // Only for Resource

      //  return $products->paginate(10);
    }


}
