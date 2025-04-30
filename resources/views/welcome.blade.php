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
    <section class="container py-12">
        {{-- Display block - ocupan el máximo del ancho disponible --}}
        <h2 class="text-4xl font-bold mb-4 border-b-1">Display block por defecto</h2>
        {{-- Modificar el display por defecto y volverlos inline --}}
        <p class="bg-red-200">Etiqueta p</p>
        {{-- El display hidden permite ocultar elementos --}}
        <div class="bg-red-400 my-4 p-3 uppercase font-bold hidden lg:inline-block">Etiqueta div</div>
        <blockquote class="bg-red-600">Etiqueta blockquote</blockquote>

        {{-- Display inline - ocupan el mínimo del ancho disponible --}}
        <h2 class="text-4xl font-bold my-4 border-b-1">Display inline por defecto</h2>
        {{-- Modificar el display por defecto y volverlos block --}}
        <span class="bg-blue-200 block">Etiqueta span</span>
        <a class="bg-blue-400 block" href="#">Etiqueta a</a>
    </section>
</body>
</html>
