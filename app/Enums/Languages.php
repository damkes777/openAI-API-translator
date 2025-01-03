<?php

namespace App\Enums;

enum Languages
{
    case POLISH;
    case GERMAN;
    case RUSSIAN;

    public function langId(): string
    {
        return match ($this) {
            self::POLISH => 'pl',
            self::GERMAN => 'de',
            self::RUSSIAN => 'ru'
        };
    }

    public function fullName(): string
    {
        return match ($this) {
            self::POLISH => 'Polish',
            self::GERMAN => 'German',
            self::RUSSIAN => 'Russian',
        };
    }
}
