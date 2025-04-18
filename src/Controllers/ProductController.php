<?php

namespace App\Controllers;

use App\Models\Product;

class ProductController
{
    public function addProduct($data)
    {
        $product = new Product();
        $product->name = $data['name'];
        $product->price = $data['price'];
        $product->description = $data['description'];
        $product->save();
        
        return $product;
    }

    public function updateProduct($id, $data)
    {
        $product = Product::find($id);
        if ($product) {
            $product->name = $data['name'];
            $product->price = $data['price'];
            $product->description = $data['description'];
            $product->save();
        }
        
        return $product;
    }

    public function getProducts()
    {
        return Product::all();
    }
}