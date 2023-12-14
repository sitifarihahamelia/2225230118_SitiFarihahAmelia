<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Message To Yourself</title>
        <link href="{{ asset('./css/style.css') }}" rel="stylesheet">

    </head>
    <body>
        @yield('body')
    </body>
</html>