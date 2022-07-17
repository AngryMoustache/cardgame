<?php

namespace App\Enums;

class Rarity
{
    public const NORMAL = 'normal';
    public const ABNORMAL = 'abnormal';
    public const EXTRAORDINARY = 'extraordinary';
    public const FABULOUS = 'fabulous';

    public static function list()
    {
        return [
            self::NORMAL => 'Normal',
            self::ABNORMAL => 'Abnormal',
            self::EXTRAORDINARY => 'Extraordinary',
            self::FABULOUS => 'Fabulous',
        ];
    }

    public static function get($key = null)
    {
        return self::list()[$key] ?? self::list();
    }
}
