<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@500;700&family=Josefin+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
        @vite(['resources/css/app.scss'])
    </head>
    <body>
        <div style="display: flex">
            @foreach (App\Models\Card::get() as $card)
                <x-card :card="$card" />
            @endforeach
        </div>

        @vite(['resources/js/app.js'])
    </body>
</html>
