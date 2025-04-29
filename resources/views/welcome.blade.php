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
    {{-- A diferencia de bootstrap en tailwind no es obligatorio un container para usar el grid --}}
    <section class="container">
        {{-- La grid de tailwind igual que la de bootstrap es de un máximo de 12 columnas --}}
        <div class="grid grid-cols-4 gap-4">
            <article class="bg-blue-100 text-gray-950 text-center py-3 rounded-xl col-span-2 col-start-2">Artículo 1</article>
            <article class="bg-blue-200 text-gray-950 text-center py-3 rounded-xl col-start-1">Artículo 2</article>
            <article class="bg-blue-300 text-gray-950 text-center py-3 rounded-xl">Artículo 3</article>
            <article class="bg-blue-400 text-gray-950 text-center py-3 rounded-xl">Artículo 4</article>
            <article class="bg-blue-500 text-white text-center py-3 rounded-xl">Artículo 5</article>
        </div>
    </section>
</body>
</html>