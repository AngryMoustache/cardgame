    <div
        class="card rarity-{{ $card->data['rarity'] }}"
        style="@isset ($scale) transform: scale({{ $scale }}) @endif"
    >
        <div
            class="card-overlay"
            style="background-image: url('../img/cards/{{ $card->data['rarity'] }}.svg');"
        ></div>

        <div
            class="card-image"
            style="background-image: url('{{ $card->image->path() }}')"
        ></div>

        <div class="card-data">
            <div class="card-data-cost"><span>{{ $card->data['cost'] }}</span></div>
            <div class="card-data-name"><span>{{ $card->name }}</span></div>

            <div class="card-data-rarity">
                <span>{{ $card->data['tags'] }}</span>
                <span>{{ App\Enums\Rarity::get($card->data['rarity']) }}</span>
            </div>

            <div class="card-data-power"><span>{{ $card->data['power'] }}</span></div>
            <div class="card-data-text"><span>{{ $card->text }}</span></div>
        </div>
    </div>
</div>
