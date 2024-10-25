<?php

namespace App\Services\OpenAI;

use Psr\Http\Message\ResponseInterface;
use JsonException;

class OpenAIResponse
{
    private array $result;

    /**
     * @throws JsonException
     */
    public function __construct(private readonly ResponseInterface $response)
    {
        $this->parseResponse();
    }

    /**
     * @throws JsonException
     */
    protected function parseResponse()
    {
        $response = json_decode($this->response->getBody(), true, 512, JSON_THROW_ON_ERROR);

    }
}