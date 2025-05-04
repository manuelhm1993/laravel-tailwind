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

            {{-- Flexbox es una clase css que permite posicionar fácilmente las cajas si están dentro de un contenedor flex --}}
            <div class="bg-gray-300 flex">
                <div class="bg-gray-400 text-gray-700 p-2 m-2">1</div>
                <div class="bg-gray-400 text-gray-700 p-2 m-2">2</div>
                <div class="bg-gray-400 text-gray-700 p-2 m-2">3</div>
            </div>
        </div>
    </section>
</body>
</html>
