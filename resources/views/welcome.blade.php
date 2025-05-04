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
    {{-- Contenedor principal --}}
    <section class="container py-4">
        {{-- Alinear verticalmente el contenido del div y darle separación de 16px = 1rem --}}
        <div class="flex flex-col gap-4">
            <h1>Layout</h1>

            {{-- Si el contenido desborda el contenedor, entonces se usa overflow-hidden para ocultarlo --}}
            <div class="bg-gray-300 p-4 h-64 overflow-hidden">
                @foreach ($content as $item)
                    <p>{{ $item }}</p>
                @endforeach
            </div>
        </div>
    </section>
</body>
</html>
