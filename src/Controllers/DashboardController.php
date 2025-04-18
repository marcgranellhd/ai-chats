<?php

namespace App\Controllers;

use App\Models\Assistant;
use App\Models\Product;

class DashboardController
{
    public function getDashboardData()
    {
        // Logic to gather data for the dashboard
        $assistants = Assistant::getAll(); // Assuming a method to get all assistants
        $products = Product::getAll(); // Assuming a method to get all products

        return [
            'assistants' => $assistants,
            'products' => $products,
            // Additional dashboard data can be added here
        ];
    }

    public function getAssistantStats()
    {
        // Logic to gather statistics about assistants
        $assistants = Assistant::getAll(); // Assuming a method to get all assistants
        $stats = [];

        foreach ($assistants as $assistant) {
            $stats[] = [
                'id' => $assistant->id,
                'name' => $assistant->name,
                'trainingDataCount' => count($assistant->trainingData), // Assuming trainingData is an array
                // Additional stats can be added here
            ];
        }

        return $stats;
    }
}