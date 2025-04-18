<?php
// filepath: g:\gpt-whatsapp-panel\gpt-whatsapp-panel\public\index.php

require_once '../src/router.php';

// Initialize the application
$router = new Router();

// Handle the incoming request
$router->handleRequest();