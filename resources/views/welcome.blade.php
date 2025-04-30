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
        {{-- La clase columns determina como se organiza el contenido dentro de un elemento ideal para blogs --}}
        <article class="columns-3xs gap-4">
            @foreach ($images as $image)
                <figure>
                    <img src="{{ asset('storage/'.$image) }}">
                </figure>
            @endforeach
        </article>
    </section>
</body>
</html>