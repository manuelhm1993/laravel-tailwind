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
    {{-- Se recomienda sustituir el space-y-4 en elementos grandes por flex flex-col gap-4 en la v4 --}}
    <section class="container py-12 flex flex-col gap-4">
        <h1 class="h1 font-montserrat font-bold">Listas desordenadas</h1>

        {{-- Manipulación de los estilos de la lista --}}
        <ul class="list-disc px-5">
            @foreach ($content as $parrafo)
                <li>{{ $parrafo }}</li>
            @endforeach
        </ul>
    </section>
</body>
</html>
