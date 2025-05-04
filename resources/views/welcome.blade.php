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
    {{-- Barra de navegación --}}
    <nav class="bg-blue-300 h-16 w-full fixed"></nav>

    {{-- Contenedor principal --}}
    <section class="container pt-16 pb-4">
        {{-- Alinear verticalmente el contenido del div y darle separación de 16px = 1rem --}}
        <div class="flex flex-col gap-4">
            <h1>Layout</h1>

            @foreach ($content as $item)
                <p>{{ $item }}</p>
            @endforeach
        </div>
    </section>
</body>
</html>
