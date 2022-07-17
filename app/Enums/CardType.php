<?php

namespace App\Enums;

class CardType
{
    public const DUDE = 'dude';
    public const RUSE = 'ruse';
    public const FIELD = 'field';
    public const HERO = 'hero';

    public static function list()
    {
        return [
            self::DUDE => 'Dude',
            self::RUSE => 'Ruse',
            self::FIELD => 'Field',
            self::HERO => 'Hero',
        ];
    }

    public static function get($key = null)
    {
        return self::list()[$key] ?? self::list();
    }
}
