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
        @forelse ($content as $classes => $parrafo)
            <h2 class="font-montserrat font-bold text-2xl">
                {{-- Enviar la segunda clase para validarla --}}
                {{ App\Utilities\Common::validateMontserratType(explode(' ', $classes)[1] ?? '') }}
            </h2>
            <p class="{{ $classes }}">{{ $parrafo }}</p>
        @empty
            <h1 class="h1 font-bold">Sin contenido</h1>
        @endforelse
    </section>
</body>
</html>
