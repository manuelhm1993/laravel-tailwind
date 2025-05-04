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

            @for ($i = 0; $i < 3; $i++)
                {{-- Sticky es un posicionamiento para menús pegajosos --}}
                <h2 class="bg-gray-300 text-gray-700 text-3xl font-bold sticky top-0">Título {{ $i + 1 }}</h2>

                @foreach ($content as $item)
                    <p>{{ $item }}</p>
                @endforeach
            @endfor

            @for ($i = 0; $i < 7; $i++)
                @foreach ($content as $item)
                    <p>{{ $item }}</p>
                @endforeach
            @endfor
        </div>
    </section>
</body>
</html>
