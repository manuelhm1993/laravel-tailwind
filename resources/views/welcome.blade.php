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
    <section class="container">
        {{-- Trabajo con gradientes, se indica a qué posición va, el color inicial, el color de paso y el color final --}}
        <div class="bg-gradient-to-r from-blue-500 via-green-600 to-yellow-400>
            Hola mundo
        </div>
    </section>
</body>
</html>
