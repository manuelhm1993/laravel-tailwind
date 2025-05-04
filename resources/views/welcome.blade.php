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

            {{-- Posicionamientos --}}
            <div class="bg-gray-300 p-4">
                <div class="bg-gray-400 p-4">
                    <div class="bg-blue-400 p-4">
                    </div>
                    {{-- Saca a la caja del flujo normal y lo posiciona respecto a su contenedor relativo más cercano o el body --}}
                    <div class="bg-blue-600 p-4 absolute left-0 inset-y-0">
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
