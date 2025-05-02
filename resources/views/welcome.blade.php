<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel - Tailwindcss</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        /* Clase personalizada para obtener una img por background */
        .imagen {
            background-image: url("{{ asset('storage/img/pexels-thngocbich-1714341.jpg') }}");
            height: 400px;
            width: 400px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <section class="container">
        <h1 class="h1 font-bold text-center my-3">Backgrounds</h1>

        <p>{{ $content[key($content)] }}</p>

        {{-- Obligar a la imagen a adaptarse a las dimensiones del contenedor --}}
        <figure class="imagen bg-contain">

        </figure>
    </section>
</body>
</html>
