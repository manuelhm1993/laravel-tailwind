<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel - Tailwindcss</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <section class="container py-5">
        <div class="flex flex-col gap-4">
            <h1>Borders</h1>
            <div class="w-64 h-32 bg-gray-500 text-white text-4xl flex items-center justify-center border-8 border-blue-800 border-double rounded-full">
                {{-- Centrar texto verticalmente dentro de un div: flex items-center justify-center --}}
                MH
            </div>

            @foreach ($content as $item)
                <p class="border-b border-gray-600">{{ $item }}</p>
            @endforeach
        </div>
    </section>
</body>
</html>
