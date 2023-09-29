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
        <header class="header">
           <h1 class="header__main-title"> {{ $header }}</h1>
        </header>
    @endif
    {{ $slot }}
</body>

</html>
