<?php

namespace App\Helpers;

class PriceHelper
{
    public static function intToFloat(
        int $price,
        int $precision = 2,
    ): float {
        return (float)number_format($price / 100, $precision, '.', ' ');
    }

    public static function floatToInt(
        float $price,
    ): int {
        return (int)($price * 100);
    }
}