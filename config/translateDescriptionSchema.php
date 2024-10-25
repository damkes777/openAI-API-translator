<?php

return [
    'type' => 'json_schema',
    'json_schema' => [
        'name' => 'description_translation_schema',
        'description' => 'Translated product description to given languages',
        'schema' => [
            'type' => 'object',
            'properties' => [
                'translations' => [
                    'type' => 'array',
                    'items' => [
                        'type' => 'object',
                        'properties' => [
                            'product_description' => [
                                'type' => 'string',
                                'description' => 'Translated product description',
                            ],
                            'description_language' => [
                                'type' => 'string',
                                'description' => 'Language of the translated product description',
                            ],
                        ],
                    ],
                    'description' => 'Array of translated product descriptions for different languages',
                ],
            ],
        ],
    ],
];