<?php

namespace App\Services;

use App\Services\OpenAI\OpenAIApi;
use GuzzleHttp\Exception\GuzzleException;
use JsonException;

class TranslateDescriptionService extends OpenAIApi
{
    private const BASE_PROMPT = 'Translate the product description: ';

    private array $languages;
    private string $description;

    public function __construct(array $languages, string $description)
    {
        parent::__construct();

        $this->languages   = $languages;
        $this->description = $description;
    }

    /**
     * @throws GuzzleException
     * @throws JsonException
     */
    public function translate(): array
    {
        $messages = $this->prepareMessages();
        $responseFormat = config('translateDescriptionSchema');
        $response = $this->sendRequest($messages, $responseFormat);

        return [];
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
                'content' => 'You translate the given description into the following languages:' .
                             $this->prepareLanguages(),
            ],
            [
                'role' => 'user',
                'content' => self::BASE_PROMPT . $this->description,
            ],
        ];
    }

    // private function prepareResponseFormat(): array
    // {
    //     return [
    //         'type' => 'json_schema',
    //         'json_schema' => [
    //             'name' => 'description_translation_schema',
    //             'description' => 'Translated product description to given languages',
    //             'schema' => [
    //                 'type' => 'object',
    //                 'properties' => [
    //                     'product_description' => [
    //                         'type' => 'string',
    //                         'description' => 'Translated product description',
    //                     ],
    //                     'description_language' => [
    //                         'type' => 'string',
    //                         'description' => 'Language of the translated product description',
    //                     ],
    //                 ],
    //             ],
    //         ],
    //     ];
    // }
}