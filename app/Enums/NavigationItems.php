<?php

namespace App\Enums;

enum NavigationItems
{
    case PRODUCTS;

    function route(): string
    {
        return match ($this) {
            self::PRODUCTS => 'products.index',
        };
    }

    function description(): string
    {
        return match ($this) {
            self::PRODUCTS => __('Products'),
        };
    }
}