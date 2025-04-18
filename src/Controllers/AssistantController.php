<?php

namespace App\Controllers;

use App\Models\Assistant;
use App\Services\ChatGPTService;

class AssistantController
{
    protected $chatGPTService;

    public function __construct()
    {
        $this->chatGPTService = new ChatGPTService();
    }

    public function createAssistant($name, $trainingData)
    {
        $assistant = new Assistant();
        $assistant->name = $name;
        $assistant->trainingData = $trainingData;
        $assistant->save();
        
        return $assistant;
    }

    public function trainAssistant($assistantId)
    {
        $assistant = Assistant::find($assistantId);
        if ($assistant) {
            $this->chatGPTService->trainModel($assistant->trainingData);
            return true;
        }
        return false;
    }

    public function getAssistants()
    {
        return Assistant::all();
    }
}