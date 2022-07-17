<?php

namespace App\Models;

use AngryMoustache\Media\Models\Attachment;
use App\CardText;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    public $fillable = [
        'name',
        'type',
        'data',
        'effects',
        'image_id',
    ];

    public $casts = [
        'data' => 'json',
        'effects' => 'json',
    ];

    public function image()
    {
        return $this->belongsTo(Attachment::class);
    }

    public function getTextAttribute()
    {
        return $this->data['masked_text'] ?? CardText::parse($this->effects);
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
