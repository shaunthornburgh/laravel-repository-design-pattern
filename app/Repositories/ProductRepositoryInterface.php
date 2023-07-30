<?php

namespace App\Repositories;

interface ProductRepositoryInterface
{
    public function getAllProducts();
    public function getProductById($productId);
    public function deleteProduct($productId);
    public function createProduct(array $productData);
    public function updateProduct($productId, array $productData);
    public function getAvailableProducts();
}
