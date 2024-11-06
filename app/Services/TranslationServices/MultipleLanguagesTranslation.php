<?php

namespace App\Services\TranslationServices;

use App\Services\OpenAIApiServices\OpenAIApiServiceInterface;

class MultipleLanguagesTranslation
{
    private const USER_PROMPT = 'Translate the sentence: ';
    private const SYSTEM_PROMPT = 'You translate the given sentence into the following languages: ';

    protected array $responseFormat;

    public function __construct(
        protected OpenAIApiServiceInterface $AIApiService
    ) {
        $this->responseFormat = config('multipleLanguagesSchema');
    }

    public function translate(
        array $languages,
        string $sentence,
    ): array {
        $messages = $this->prepareMessages($languages, $sentence);
        $response = $this->AIApiService->sendRequest($messages, $this->responseFormat);

        return $response->getStatusCode() === 200 ? $response->getResult() : [];
    }

    private function prepareMessages(array $languages, string $sentence): array
    {
        return [
            [
                'role' => 'system',
                'content' => self::SYSTEM_PROMPT . $this->prepareLanguages($languages),
            ],
            [
                'role' => 'user',
                'content' => self::USER_PROMPT . $sentence,
            ],
        ];
    }

    private function prepareLanguages(array $languages): string
    {
        return implode(',', $languages);
    }
}