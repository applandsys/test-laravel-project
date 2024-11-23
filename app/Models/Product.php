<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
class Product extends Model
{
    protected $fillable = ['name', 'slug', 'price'];


     /**
     * Many-to-Many relationship with Category model.
     */
    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class, 'product_categories', 'product_id', 'category_id');
    }

    public function orderDetails()
{
    return $this->hasMany(OrderDetail::class, 'product_id');
}

    public function reviews(): HasMany
    {
        return $this->hasMany(ProductReview::class);
    }
}
