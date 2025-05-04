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
        {{-- Alinear verticalmente el contenido del div y darle separación de 16px = 1rem --}}
        <div class="flex flex-col gap-4">
            <h1>Sizes</h1>
            
            <div class="bg-blue-600 h-64">
                {{-- 100% de la altura del padre y al ser un block ocupa todo el ancho --}}
                <div class="bg-red-600 h-full">

                </div>
            </div>
        </div>
    </section>
</body>
</html>
