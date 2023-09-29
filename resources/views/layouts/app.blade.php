<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Page Title' }}</title>

    @vite(['resources/css/app.scss', 'resources/js/app.js'])
</head>

<body>
    @if (isset($header))
        <div class="header">
            {{ $header }}
        </div>
    @endif
    {{ $slot }}
</body>

</html>
