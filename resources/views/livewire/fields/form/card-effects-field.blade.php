<div>
    <div class="crud-form-field">
        <label class="crud-form-field-label">
            Card effects
        </label>

        <div class="crud-form-field-input">
            <select wire:model="chosenTrigger">
                <option>- Select a new trigger -</option>
                @foreach (\App\Enums\Trigger::list() as $value => $label)
                    <option value="{{ $value }}">
                        {{ $label }}
                    </option>
                @endforeach
            </select>

            <x-rambo::crud.fields.error :field="$field" />
        </div>
    </div>

    @foreach ($events as $key => $event)
        <div class="crud-form-field">
            <label class="crud-form-field-label">
                {{ $event['trigger'] }}
            </label>

            <div class="crud-form-field-input">
                <select wire:model="events.{{ $key }}.effect">
                    <option>- Select a new trigger -</option>
                    @foreach (\App\Enums\Effect::list() as $value => $label)
                        <option value="{{ $value }}">
                            {{ $label }}
                        </option>
                    @endforeach
                </select>

                @if (! empty($event['effect'] ?? null))
                    @foreach (\App\Enums\Effect::parameters($event['effect']) as $param)
                        <label>{{ ucfirst($param) }}</label>
                        <input wire:model="events.{{ $key }}.parameters.{{ $param }}" type="text" />
                    @endforeach
                @endif
            </div>
        </div>
    @endforeach
</div>
