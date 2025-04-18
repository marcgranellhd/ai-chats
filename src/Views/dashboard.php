<?php
// filepath: g:\gpt-whatsapp-panel\gpt-whatsapp-panel\src\Views\dashboard.php

require_once '../Controllers/DashboardController.php';

$dashboardController = new DashboardController();
$dashboardData = $dashboardController->getDashboardData();
$assistantStats = $dashboardController->getAssistantStats();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/assets/style.css">
    <title>Dashboard</title>
</head>
<body>
    <div class="container">
        <h1>Dashboard</h1>
        <div class="stats">
            <h2>Assistant Statistics</h2>
            <ul>
                <?php foreach ($assistantStats as $stat): ?>
                    <li><?php echo htmlspecialchars($stat); ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
        <div class="data">
            <h2>Dashboard Data</h2>
            <pre><?php echo htmlspecialchars(json_encode($dashboardData, JSON_PRETTY_PRINT)); ?></pre>
        </div>
    </div>
</body>
</html>