<?php

return [
    'type' => 'json_schema',
    'json_schema' => [
        'name' => 'multiple_languages_schema',
        'description' => 'Translated sentence to given languages',
        'schema' => [
            'type' => 'object',
            'properties' => [
                'translations' => [
                    'type' => 'array',
                    'items' => [
                        'type' => 'object',
                        'properties' => [
                            'sentence' => [
                                'type' => 'string',
                                'description' => 'Translated sentence',
                            ],
                            'sentence_language' => [
                                'type' => 'string',
                                'description' => 'Language of the translated sentence',
                            ],
                        ],
                    ],
                    'description' => 'Array of translated sentence for different languages',
                ],
            ],
        ],
    ],
];