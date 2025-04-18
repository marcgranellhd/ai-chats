<?php

namespace App\Services;

use GuzzleHttp\Client;

class WhatsAppService
{
    private $client;
    private $apiUrl;
    private $token;

    public function __construct($apiUrl, $token)
    {
        $this->apiUrl = $apiUrl;
        $this->token = $token;
        $this->client = new Client();
    }

    public function sendMessage($to, $message)
    {
        $response = $this->client->post($this->apiUrl . '/messages', [
            'headers' => [
                'Authorization' => 'Bearer ' . $this->token,
                'Content-Type' => 'application/json',
            ],
            'json' => [
                'to' => $to,
                'type' => 'text',
                'text' => [
                    'body' => $message,
                ],
            ],
        ]);

        return json_decode($response->getBody(), true);
    }

    public function receiveMessage($payload)
    {
        // Process incoming message payload
        // This method can be expanded to handle different message types and respond accordingly
        return $payload;
    }
}