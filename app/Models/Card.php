<?php

namespace App\Models;

use AngryMoustache\Media\Models\Attachment;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    public $fillable = [
        'name',
        'type',
        'data',
        'image_id',
    ];

    public $casts = [
        'data' => 'json',
    ];

    public function image()
    {
        return $this->belongsTo(Attachment::class);
    }

    public static function boot()
    {
        parent::boot();

        self::saving(function ($card) {
            if (! $card->type) {
                $card->type = $card->data['type'] ?? null;
            }

            return $card;
        });
    }
}
