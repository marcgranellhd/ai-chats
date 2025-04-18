<?php
// src/router.php

require_once 'Controllers/AssistantController.php';
require_once 'Controllers/ProductController.php';
require_once 'Controllers/DashboardController.php';
require_once 'Controllers/WhatsAppWebhookController.php';

$assistantController = new AssistantController();
$productController = new ProductController();
$dashboardController = new DashboardController();
$whatsAppWebhookController = new WhatsAppWebhookController();

$requestUri = $_SERVER['REQUEST_URI'];
$requestMethod = $_SERVER['REQUEST_METHOD'];

switch ($requestUri) {
    case '/assistants':
        if ($requestMethod === 'GET') {
            $assistantController->getAssistants();
        } elseif ($requestMethod === 'POST') {
            $assistantController->createAssistant();
        }
        break;

    case '/products':
        if ($requestMethod === 'GET') {
            $productController->getProducts();
        } elseif ($requestMethod === 'POST') {
            $productController->addProduct();
        }
        break;

    case '/dashboard':
        if ($requestMethod === 'GET') {
            $dashboardController->getDashboardData();
        }
        break;

    case '/whatsapp/webhook':
        if ($requestMethod === 'POST') {
            $whatsAppWebhookController->handleIncomingMessage();
        }
        break;

    default:
        http_response_code(404);
        echo json_encode(['message' => 'Not Found']);
        break;
}
?>