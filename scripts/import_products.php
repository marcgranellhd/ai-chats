<?php
// filepath: gpt-whatsapp-panel/gpt-whatsapp-panel/scripts/import_products.php

require_once '../src/Services/ProductImporter.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['product_file'])) {
    $file = $_FILES['product_file']['tmp_name'];
    
    $importer = new ProductImporter();
    
    try {
        $importedProducts = $importer->importFromFile($file);
        echo json_encode(['success' => true, 'imported' => $importedProducts]);
    } catch (Exception $e) {
        echo json_encode(['success' => false, 'message' => $e->getMessage()]);
    }
} else {
    echo json_encode(['success' => false, 'message' => 'No file uploaded.']);
}
?>