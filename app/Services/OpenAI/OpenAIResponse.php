<?php

namespace App\Services\OpenAI;

use Psr\Http\Message\ResponseInterface;
use JsonException;

class OpenAIResponse
{
    private const STATUS_CODE_200 = 200;
    private const FAIL_MESSAGE = 'Request fail with status code: ';

    private array $result = [];
    private string $message = '';
    private string $finishReason = '';
    private string $refusal = '';
    private int $statusCode;

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
    private function parseResponse(): void
    {
        $responseDecoded  = json_decode($this->response->getBody(), true, 512, JSON_THROW_ON_ERROR);
        $this->statusCode = $this->response->getStatusCode();

        if ($this->getStatusCode() === self::STATUS_CODE_200) {
            $choices = (collect($responseDecoded->choices))->first();

            $this->result       = json_decode($choices['message']['content'], true, 512, JSON_THROW_ON_ERROR);
            $this->refusal      = $choices['message']['refusal'];
            $this->finishReason = $choices['finish_reason'];
        } else {
            $this->message = self::FAIL_MESSAGE . $this->response->getStatusCode();
        }
    }

    public function getFinishReason(): string
    {
        return $this->finishReason;
    }

    public function getRefusal(): string
    {
        return $this->refusal;
    }

    public function getResult(): array
    {
        return $this->result;
    }

    public function getMessage(): string
    {
        return $this->message;
    }

    public function getStatusCode(): int
    {
        return $this->statusCode;
    }
}