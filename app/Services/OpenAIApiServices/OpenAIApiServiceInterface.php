<?php

namespace App\Services\OpenAIApiServices;

use App\Services\OpenAIApiServices\OpenAIResponse;

interface OpenAIApiServiceInterface
{
    public function sendRequest(
        array $messages,
        array $responseFormat,
        string $model = 'gpt-4o-mini',
    ): OpenAIResponse;
}