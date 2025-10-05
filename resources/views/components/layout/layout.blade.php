<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <link rel="stylesheet" href="callback.css">
    @endif
</head>

<body>
    <div class="antialiased bg-gray-50">
        <x-layout.topbar />
        <x-layout.sidebar />
        <main class="p-4 md:ml-64 h-full pt-20 pl-8 ">
            {{ $slot }}
        </main>
    </div>
</body>

</html>
