<?php

namespace App\Services;

use App\Enums\StatusCodes;
use App\Services\OpenAI\OpenAIApi;
use GuzzleHttp\Exception\GuzzleException;
use JsonException;

class TranslateDescriptionService extends OpenAIApi
{
    private const USER_PROMPT = 'Translate the product description: ';
    private const SYSTEM_PROMPT = 'You translate the given description into the following languages: ';

    public function __construct(
        private readonly array $languages,
        private readonly string $description
    ) {
        parent::__construct();
    }

    /**
     * @throws GuzzleException
     * @throws JsonException
     */
    public function translate(): array
    {
        $messages       = $this->prepareMessages();
        $responseFormat = config('translateDescriptionSchema');

        $response = $this->sendRequest($messages, $responseFormat);

        if ($response->getStatusCode() != StatusCodes::STATUS_CODE_200) {
            return [];
        }

        return $response->getResult();
    }

    private function prepareLanguages(): string
    {
        return implode(',', $this->languages);
    }

    private function prepareMessages(): array
    {
        return [
            [
                'role' => 'system',
                'content' => self::SYSTEM_PROMPT . $this->prepareLanguages(),
            ],
            [
                'role' => 'user',
                'content' => self::USER_PROMPT . $this->description,
            ],
        ];
    }
}