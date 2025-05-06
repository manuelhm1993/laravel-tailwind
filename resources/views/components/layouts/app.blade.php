<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel - Tailwindcss</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @livewireStyles
</head>
<body>
    <main class="container">
        @if (!$header->isEmpty())
        <header>
            {{ $header }}
        </header>
        @endif
        {{-- Contenedor principal --}}
        <section class="container py-4">
            {{ $slot }}
        </section>

        @if (!$footer->isEmpty())
        <footer>
            {{ $footer }}
        </footer>
        @endif
    </main>

    @livewireScripts
</body>
</html>
