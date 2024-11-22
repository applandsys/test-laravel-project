<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
class Product extends Model
{
    protected $fillable = ['name', 'slug', 'price'];

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class, 'product_category');
    }

    public function reviews(): HasMany
    {
        return $this->hasMany(ProductReview::class);
    }
}
