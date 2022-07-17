<?php

namespace App\Http\Livewire\Fields;

use AngryMoustache\Rambo\Http\Livewire\Fields\FormField;

class CardEffectsField extends FormField
{
    public string $chosenTrigger = '';
    public array $events;

    public function mount($field = null, $item = null, $rules = [])
    {
        parent::mount($field, $item, $rules);
        $this->events = $this->value ?? [];
    }

    public function render()
    {
        return view('livewire.fields.form.card-effects-field');
    }

    public function updatedChosenTrigger($value)
    {
        $this->chosenTrigger = '';
        $this->events[] = ['trigger' => $value];
    }

    public function updatedEvents()
    {
        $this->value = $this->events;
        $this->emitValue();
    }
}
