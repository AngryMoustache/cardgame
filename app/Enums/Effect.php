<?php

namespace App\Enums;

class Effect
{
    public const DEAL_DAMAGE = 'deal_damage';
    public const HEAL_POWER = 'heal_power';
    public const DRAW_CARDS = 'draw_cards';

    public static function list()
    {
        return [
            self::DEAL_DAMAGE => 'Deal damage',
            self::HEAL_POWER => 'Heal power',
            self::DRAW_CARDS => 'Draw cards',
        ];
    }

    public static function parameters($key)
    {
        return [
            self::DEAL_DAMAGE => ['amount', 'target'],
            self::HEAL_POWER => ['amount', 'target'],
            self::DRAW_CARDS => ['amount'],
        ][$key] ?? [];
    }

    public static function get($key = null)
    {
        return self::list()[$key] ?? self::list();
    }
}
