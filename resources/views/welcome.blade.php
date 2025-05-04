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
    <section class="container py-5">
        {{-- Alinear el contenido verticalmente con una separación de 1rem = 16px --}}
        <div class="flex flex-col gap-4">
            <h1>Borders</h1>
            
            {{-- Centrar texto verticalmente dentro de un div: flex items-center justify-center --}}
            <div class="w-64 h-32 bg-gray-500 text-white text-4xl flex items-center justify-center border-8 border-blue-800 border-double rounded-full">
                MH
            </div>

            {{-- Agregar bordes inferiores sin tener que colocarlos en cada párrafo --}}
            <article class="divide-y-8 divide-gray-600 divide-dashed border-b-8 border-gray-600 border-dashed text-justify">
                @foreach ($content as $item)
                    <p>{{ $item }}</p>
                @endforeach
            </article>

            {{-- Simular una barra de navegación --}}
            <nav class="divide-x-2 divide-blue-600">
                <a href="" class="p-4">Link 1</a>
                <a href="" class="p-4">Link 2</a>
                <a href="" class="p-4">Link 3</a>
                <a href="" class="p-4">Link 4</a>
                <a href="" class="p-4">Link 5</a>
            </nav>
        </div>
    </section>
</body>
</html>
