<?php

namespace App\Rambo;

use AngryMoustache\Rambo\Fields\AttachmentField;
use AngryMoustache\Rambo\Fields\IDField;
use AngryMoustache\Rambo\Fields\SelectField;
use AngryMoustache\Rambo\Fields\TextField;
use AngryMoustache\Rambo\Resource;
use App\Enums\CardType;
use App\Rambo\Fields\CardDataField;

class Card extends Resource
{
    public $displayName = 'name';

    public function fields()
    {
        return [
            IDField::make(),

            TextField::make('name'),

            SelectField::make('type')
                ->options(CardType::list())
                ->hideFrom(['edit', 'create']),

            AttachmentField::make('image_id', 'Image')
                ->rules('required'),

            CardDataField::make('data')
                ->hideFrom('index'),
        ];
    }
}
