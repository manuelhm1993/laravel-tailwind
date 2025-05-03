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
        {{-- En la versión 4 de tailwind opacity quedó deprecado, en su reemplazo se usan modificadores /25 --}}
        <div class="bg-blue-700/25 h-12"></div>
    </section>
</body>
</html>
