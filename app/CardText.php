<?php

namespace App;

use App\Enums\Effect;
use App\Enums\Trigger;

class CardText
{
    public static function parse($effects)
    {
        return collect($effects ?? [])
            ->groupBy('trigger')
            ->map(function ($triggerGroup) {
                return $triggerGroup->map(fn ($effect) => self::parseEffect($effect))->join(', ', ' and ');
            })
            ->map(function ($effect, $key) {
                return self::parseTrigger($key) . $effect . '.';
            })
            ->join(' ');
    }
    public static function parseTrigger($key)
    {
        return match($key) {
            Trigger::START_TURN => 'At the start of your turn, ',
            Trigger::END_TURN => 'At the end of your turn, ',
            Trigger::IS_PLAYED => 'When {name} is played, ',
            Trigger::IS_DESTROYED => 'When {name} is destroyed, ',
        };
    }

    public static function parseEffect($data)
    {
        $effect = match($data['effect']) {
            Effect::DEAL_DAMAGE => 'deal {amount} damage to {target}',
            Effect::HEAL_POWER => 'heal {amount} power to {target}',
            Effect::DRAW_CARDS => ((int) $data['parameters']['amount'] === 1)
                ? 'draw a card'
                : 'draw {amount} cards',
        };

        foreach ($data['parameters'] as $key => $value) {
            $effect = str_replace("{{$key}}", $value, $effect);
        }

        return $effect;
    }
}
