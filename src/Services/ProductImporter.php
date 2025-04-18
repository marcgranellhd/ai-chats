<?php

namespace Services;

use Models\Product;

class ProductImporter
{
    public function importFromFile($filePath)
    {
        $productsData = $this->readFile($filePath);
        foreach ($productsData as $productData) {
            if ($this->validateProductData($productData)) {
                $this->saveProduct($productData);
            }
        }
    }

    private function readFile($filePath)
    {
        // Assuming the file is a CSV for simplicity
        $products = [];
        if (($handle = fopen($filePath, 'r')) !== false) {
            while (($data = fgetcsv($handle, 1000, ',')) !== false) {
                $products[] = [
                    'name' => $data[0],
                    'price' => $data[1],
                    'description' => $data[2],
                ];
            }
            fclose($handle);
        }
        return $products;
    }

    public function validateProductData($productData)
    {
        return isset($productData['name'], $productData['price'], $productData['description']) &&
               is_numeric($productData['price']);
    }

    private function saveProduct($productData)
    {
        $product = new Product();
        $product->name = $productData['name'];
        $product->price = $productData['price'];
        $product->description = $productData['description'];
        $product->save();
    }
}