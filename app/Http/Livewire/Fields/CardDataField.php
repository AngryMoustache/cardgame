<?php

namespace App\Http\Livewire\Fields;

use AngryMoustache\Rambo\Fields\SelectField;
use AngryMoustache\Rambo\Fields\TextField;
use AngryMoustache\Rambo\Http\Livewire\Fields\FormField;
use App\Enums\CardType;
use App\Enums\Rarity;
use App\Http\Livewire\Wireables\FormObject;

class CardDataField extends FormField
{
    public string $cardType = '';
    public array $fields = [];
    public ?FormObject $form;

    public function mount($field = null, $item = null, $rules = [])
    {
        parent::mount($field, $item, $rules);
        $this->fields = $this->value ?? [];
        $this->updatedCardType($this->fields['type'] ?? '');
    }

    public function render()
    {
        return view('livewire.fields.form.card-data-field');
    }

    public function updatedCardType($value)
    {
        $this->cardType = $value;
        $this->fields['type'] = $value;
        $this->form = match ($value) {
            default => null,
            CardType::DUDE => new FormObject([
                TextField::make('power')->type('number'),
                TextField::make('cost')->type('number'),
                TextField::make('tags'),
                SelectField::make('rarity')
                    ->nullable()
                    ->options(Rarity::list()),
            ]),
        };
    }

    public function updatedFields()
    {
        $this->value = $this->fields;
        $this->emitValue();
    }
}
