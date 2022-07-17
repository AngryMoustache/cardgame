<?php

namespace App\Enums;

class Trigger
{
    public const START_TURN = 'start_turn';
    public const END_TURN = 'end_turn';
    public const IS_PLAYED = 'is_played';
    public const IS_DESTROYED = 'is_destroyed';

    public static function list()
    {
        return [
            self::START_TURN => 'On start turn',
            self::END_TURN => 'On end turn',
            self::IS_PLAYED => 'When played',
            self::IS_DESTROYED => 'When destroyed',
        ];
    }

    public static function get($key = null)
    {
        return self::list()[$key] ?? self::list();
    }
}
