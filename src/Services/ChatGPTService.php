<?php

namespace App\Services;

use GuzzleHttp\Client;

class ChatGPTService
{
    private $client;
    private $apiKey;
    private $apiUrl;

    public function __construct($apiKey)
    {
        $this->apiKey = $apiKey;
        $this->apiUrl = 'https://api.openai.com/v1/chat/completions';
        $this->client = new Client();
    }

    public function generateResponse($prompt, $model = 'gpt-3.5-turbo')
    {
        $response = $this->client->post($this->apiUrl, [
            'headers' => [
                'Authorization' => 'Bearer ' . $this->apiKey,
                'Content-Type' => 'application/json',
            ],
            'json' => [
                'model' => $model,
                'messages' => [['role' => 'user', 'content' => $prompt]],
            ],
        ]);

        return json_decode($response->getBody(), true);
    }

    public function trainModel($trainingData)
    {
        // Implementation for training the model with provided training data
        // This is a placeholder as the actual training process may vary
        // and may not be directly supported via the API.
    }
}