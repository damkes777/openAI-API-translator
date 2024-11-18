<?php

namespace App\Enums;

enum Languages
{
    case POLISH;
    case ENGLISH;
    case GERMAN;
    case RUSSIAN;

    public function langId(): string
    {
        return match ($this) {
            self::POLISH => 'pl',
            self::ENGLISH => 'en',
            self::GERMAN => 'de',
            self::RUSSIAN => 'ru'
        };
    }

    public function fullName(): string
    {
        return match ($this) {
            self::POLISH => 'Polish',
            self::ENGLISH => 'English',
            self::GERMAN => 'German',
            self::RUSSIAN => 'Russian',
        };
    }
}
