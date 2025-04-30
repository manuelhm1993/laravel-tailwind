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
        <article class="columns-2">
            {{-- Recorrer las imagenes traidas desde el controlador --}}
            @forelse ($images as $image)
                <figure>
                    <img src="{{ asset('storage/' . $image) }}">
                </figure>
            @empty
                {{-- En caso de no existir imagenes se coloca texto --}}
                @forelse ($content as $class => $parrafo)
                    <p class="{{ $class }}">{{ $parrafo }}</p>
                @empty
                    {{-- En caso de no existir texto se da un mensaje de error personalizado --}}
                    <div class="p-4 mb-4 text-2xl text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400"
                        role="alert">
                        <span class="font-medium">Error.</span> No existe contenido a mostrar
                    </div>
                @endforelse
            @endforelse
        </article>
    </section>

    <script>
        // Remover las clases columns-2 y gap del article en caso de que se lance el alert
        document.addEventListener('DOMContentLoaded', (e) => {
            const alert = document.querySelector('.container div[role="alert"]');

            if(alert !== null)
            {
                const article = document.querySelector('.container article');

                article.classList.remove('columns-2');
            }
        });
    </script>
</body>
</html>
