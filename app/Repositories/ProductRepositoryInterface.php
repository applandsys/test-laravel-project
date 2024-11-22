<?php

namespace App\Repositories;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
interface ProductRepositoryInterface
{
    public function getCategoryBySlug(string $slug);
    public function getCategoryProducts(string $slug, string $sort = null);
}
