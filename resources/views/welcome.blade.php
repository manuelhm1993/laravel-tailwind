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
    
            {{-- Al agregar padding, eso se suma al contenedor, a no ser que se use box-sizing: border-box; --}}
            <div class="bg-gray-300 w-64 h-32 p-8">
                <div class="bg-gray-500 w-full h-full">

                </div>
            </div>
        </div>
    </section>
</body>
</html>
