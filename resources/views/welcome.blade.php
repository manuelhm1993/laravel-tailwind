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

            {{-- Para cortar el efecto de flex se encierra el contenido dentro de un div --}}
            <div>
                {{-- Display inline --}}
                <div class="bg-gray-400 text-gray-700 text-center px-4 py-2 inline">1</div>
                <div class="bg-gray-400 text-gray-700 text-center px-4 py-2 inline">2</div>
                <div class="bg-gray-400 text-gray-700 text-center px-4 py-2 inline">3</div>
            </div>
        </div>
    </section>
</body>
</html>
