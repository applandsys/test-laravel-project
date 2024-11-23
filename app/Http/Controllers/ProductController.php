<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Repositories\ProductRepositoryInterface;

class ProductController extends BaseAction
{
    protected ProductRepositoryInterface $productRepository;

    public function __construct(ProductRepositoryInterface $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    /**
     * Get the Product with sort order
     * @params String $slug , Request $request
     * $slug is the query string for sort order
     */
    public function getProducts(string $slug, Request $request): JsonResponse
    {
        $category = $this->productRepository->getCategoryBySlug($slug);

        if (!$category) {
            return $this->responseDefault(['error' => 'Category not found'], 404);
        }

        $products = $this->productRepository->getCategoryProducts(
            $slug,
            $request->query('sort', null)
        );

        return $this->responseDefault($products);
    }
}
