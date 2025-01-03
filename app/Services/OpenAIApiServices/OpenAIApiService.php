<?php

namespace App\Services\OpenAIApiServices;

use App\Services\OpenAIApiServices\OpenAIApiServiceInterface;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use JsonException;

class OpenAIApiService implements OpenAIApiServiceInterface
{
    protected string $url;
    protected string $apiKey;
    protected array $headers;
    protected Client $client;

    public function __construct()
    {
        $this->url     = config('openai.url');
        $this->apiKey  = config('openai.api_key');
        $this->headers = [
            'Authorization' => "Bearer $this->apiKey",
            'Content-Type' => 'application/json',
        ];
        $this->client  = new Client(['base_uri' => $this->url]);
    }

    /**
     * @throws GuzzleException
     * @throws JsonException
     */
    public function sendRequest(
        array $messages,
        array $responseFormat,
        string $model = 'gpt-4o-mini',
    ): OpenAIResponse {
        $response = $this->client->post('', [
            'headers' => $this->headers,
            'json' => [
                'model' => $model,
                'messages' => $messages,
                'response_format' => $responseFormat
            ],
        ]);

        return new OpenAIResponse($response);
    }
}