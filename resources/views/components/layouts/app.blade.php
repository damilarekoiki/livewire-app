<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf_token" value="{{ csrf_token() }}"/>
        @vite('resources/css/app.css')

        <title>{{ $title ?? 'Page Title' }}</title>
    </head>
    <body>
        <main class="p-4">
            {{ $slot }}
        </main>
    </body>
</html>
