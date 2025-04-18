<?php
// filepath: g:\gpt-whatsapp-panel\gpt-whatsapp-panel\src\Views\products\index.php

// Include necessary files
require_once '../../Controllers/ProductController.php';

$productController = new ProductController();
$products = $productController->getProducts();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../public/assets/style.css">
    <title>Product Management</title>
</head>
<body>
    <div class="container">
        <h1>Product Management</h1>
        <a href="add.php" class="btn">Add New Product</a>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($products as $product): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($product->id); ?></td>
                        <td><?php echo htmlspecialchars($product->name); ?></td>
                        <td><?php echo htmlspecialchars($product->price); ?></td>
                        <td><?php echo htmlspecialchars($product->description); ?></td>
                        <td>
                            <a href="edit.php?id=<?php echo $product->id; ?>" class="btn">Edit</a>
                            <a href="delete.php?id=<?php echo $product->id; ?>" class="btn">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>