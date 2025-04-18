<?php
// Configuration settings for the GPT WhatsApp Panel

return [
    'database' => [
        'host' => 'localhost',
        'dbname' => 'gpt_whatsapp_panel',
        'username' => 'your_username',
        'password' => 'your_password',
    ],
    'chatgpt' => [
        'api_key' => 'your_chatgpt_api_key',
        'api_url' => 'https://api.openai.com/v1/chat/completions',
    ],
    'whatsapp' => [
        'api_url' => 'https://api.whatsapp.com/v1/messages',
        'token' => 'your_whatsapp_api_token',
    ],
    'import' => [
        'allowed_file_types' => ['csv', 'json'],
        'max_file_size' => 2048, // in KB
    ],
];