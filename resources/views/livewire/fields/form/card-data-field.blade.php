<div>
    <div class="crud-form-field">
        <label class="crud-form-field-label" for="data">
            Card data
        </label>

        <div class="crud-form-field-input">
            <select wire:model="cardType">
                <option>- Select a card type -</option>
                @foreach (\App\Enums\CardType::list() as $value => $label)
                    <option value="{{ $value }}">
                        {{ $label }}
                    </option>
                @endforeach
            </select>

            <x-rambo::crud.fields.error :field="$field" />
        </div>
    </div>

    @if ($cardType !== '')
        @foreach ($form->fields as $field)
            <x-rambo::crud.fields.form
                :resource="$resource"
                :field="$field"
                :item="$resource->item"
            />
        @endforeach
    @endif
</div>
