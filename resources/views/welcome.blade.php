<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        @for ($i = 0; $i < count($quotes); $i++)
            <p>{{ $quotes[$i]['quote'] }}</p>
        @endfor

        <button type="reset">Refresh</button>
    </body>
</html>
