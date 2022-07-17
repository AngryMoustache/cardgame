<?php

use AngryMoustache\Rambo\Resources\Administrator;
use AngryMoustache\Rambo\Resources\Attachment;
use App\Rambo\Card;

return [
    'admin-route' => 'admin',
    'admin-guard' => 'rambo',
    'resources' => [
        Attachment::class,
        Administrator::class,
        Card::class,
    ],
    'navigation' => [
        'General' => [
            Administrator::class,
            Attachment::class,
        ],
        'Game' => [
            Card::class,
        ],
    ],
    'cropper' => [
        'formats' => [
            \AngryMoustache\Media\Formats\Thumb::class => 'Thumb',
        ],
    ],
];
