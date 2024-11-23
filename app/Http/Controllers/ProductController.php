<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\ProductRepositoryInterface;

class ProductController extends Controller
{
    protected ProductRepositoryInterface $productRepository;

    public function __construct(ProductRepositoryInterface $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function getProducts($slug, Request $request)
    {
        $category = $this->productRepository->getCategoryBySlug($slug);

        if (!$category) {
            return response()->json(['error' => 'Category not found'], 404);
        }

        $products = $this->productRepository->getCategoryProducts(
            $slug,
            $request->query('sort', null)
        );

        return response()->json($products);
    }
}
