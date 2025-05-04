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
    <main class="relative">
        {{-- Barra de navegación lateral --}}
        <aside class="h-screen bg-blue-500 w-64 absolute left-0 top-0">
        </aside>
        
        {{-- Contenedor principal --}}
        <section class="container py-5 ms-64">
            {{-- Alinear verticalmente el contenido del div y darle separación de 16px = 1rem --}}
            <div class="flex flex-col gap-4">
                <h1>Sizes</h1>
        
            </div>
        </section>
    </main>
</body>
</html>
