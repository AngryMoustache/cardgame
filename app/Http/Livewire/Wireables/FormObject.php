<?php

namespace App\Http\Livewire\Wireables;

use AngryMoustache\Rambo\Fields\Field;
use Livewire\Wireable;

class FormObject implements Wireable
{
    public function __construct(public array $fields) {}

    public function toLivewire()
    {
        return collect($this->fields)
            ->map(fn ($field) => $field->toLivewire())
            ->toArray();
    }

    public static function fromLivewire($value)
    {
        $fields = [];
        foreach ($value as $field) {
            $fields[] = Field::fromLivewire($field);
        }

        return new static($fields);
    }
}
