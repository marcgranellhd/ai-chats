<?php
// filepath: g:\gpt-whatsapp-panel\gpt-whatsapp-panel\src\Views\assistants\index.php

// Include necessary files
require_once '../../Controllers/AssistantController.php';

$assistantController = new AssistantController();
$assistants = $assistantController->getAssistants();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Assistants</title>
    <link rel="stylesheet" href="../../assets/style.css">
</head>
<body>
    <div class="container">
        <h1>Manage Assistants</h1>
        <a href="create.php" class="btn">Create New Assistant</a>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($assistants as $assistant): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($assistant->id); ?></td>
                        <td><?php echo htmlspecialchars($assistant->name); ?></td>
                        <td>
                            <a href="edit.php?id=<?php echo htmlspecialchars($assistant->id); ?>" class="btn">Edit</a>
                            <a href="delete.php?id=<?php echo htmlspecialchars($assistant->id); ?>" class="btn">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>