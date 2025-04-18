<?php

namespace App\Controllers;

use App\Services\WhatsAppService;

class WhatsAppWebhookController
{
    protected $whatsAppService;

    public function __construct()
    {
        $this->whatsAppService = new WhatsAppService();
    }

    public function handleIncomingMessage($request)
    {
        $message = $request['message'];
        $sender = $request['sender'];

        // Process the incoming message and generate a response
        $response = $this->generateResponse($message);

        // Send the response back to the user
        $this->sendResponse($sender, $response);
    }

    protected function generateResponse($message)
    {
        // Logic to generate a response based on the incoming message
        // This could involve calling the ChatGPT API or other processing
        return "This is a placeholder response to: " . $message;
    }

    public function sendResponse($recipient, $response)
    {
        $this->whatsAppService->sendMessage($recipient, $response);
    }
}