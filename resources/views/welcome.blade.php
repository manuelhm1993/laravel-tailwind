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

            <div class="bg-gray-300">
                <figure>
                    {{-- Uso de object para redimensionar imágenes --}}
                    <img src="https://cdn.pixabay.com/photo/2022/01/06/07/25/south-korea-6918828_960_720.jpg" class="w-full h-64 object-cover object-bottom" alt="Sin imagen">
                </figure>
            </div>
        </div>
    </section>
</body>
</html>
