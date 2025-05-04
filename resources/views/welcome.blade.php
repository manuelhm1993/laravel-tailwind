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

            {{-- Contenedor flex, todas las cajas deben ir dentro de un contenedor --}}
            <div class="bg-gray-300 flex h-64 justify-center items-center">
                {{-- 
                    Ejes flex
                        * Eje main-axis: por defecto es flex-row, pero existe flex-col
                            - Row: distribuye las cajas de izquierda a derecha en filas
                            - Col: distribuye las cajas de arriba a abajo en columnas
                        * Eje cross-axis: es un eje perpendicular al main-axis
                            - Si el eje main-axis es horizontal, el eje cross-axis será vertical
                            - El eje cross-axis establece que se ocupe todo el espacio posible
                --}}
                <div class="bg-gray-400 text-gray-700 py-2 px-4 m-2">1</div>
                <div class="bg-gray-400 text-gray-700 py-2 px-4 m-2">2</div>
                <div class="bg-gray-400 text-gray-700 py-2 px-4 m-2">3</div>
            </div>
        </div>
    </section>
</body>
</html>
