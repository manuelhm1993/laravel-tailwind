<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Generador de token --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Laravel - Tailwindcss</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @livewireStyles

    @stack('css')

    <style>
        body {
            font-family: 'Nunito';
            font-weight: 400;
        }
    </style>
</head>
<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
        {{-- Llamar a un componente de livewire --}}
        @livewire('navigation')

        {{-- Contenedor principal --}}
        <main>
            {{ $slot }}
        </main>
    </div>

    @livewireScripts

    @stack('js')
</body>
</html>
