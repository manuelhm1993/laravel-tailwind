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
        <div class="grid grid-cols-3 gap-6">
            <div class="col-span-2">
                {{-- Se copió el iframe de un video de youtube, esto se logra con compartir/insertar --}}

                {{-- Se eliminaron el alto y ancho fijos y se le dió un ancho 100% y aspect-video para que se vea bien --}}
                <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/hQps7n-o5n8?si=_7HWKsg4GixOAipL" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>

            <div class="col-span-1 bg-blue-200">

            </div>
        </div>
    </section>
</body>
</html>