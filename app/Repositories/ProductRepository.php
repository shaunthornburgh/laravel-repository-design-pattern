<?php

namespace App\Repositories;

use App\Models\Product;

class ProductRepository implements ProductRepositoryInterface
{
    public function getAllProducts()
    {
        return Product::all();
    }

    public function getProductById($productId)
    {
        return Product::findOrFail($productId);
    }

    public function deleteProduct($productId)
    {
        Product::destroy($productId);
    }

    public function createProduct(array $productData)
    {
        return Product::create($productData);
    }

    public function updateProduct($productId, array $productData)
    {
        return Product::whereId($productId)->update($productData);
    }

    public function getAvailableProducts()
    {
        return Product::where('is_available', true);
    }
}
