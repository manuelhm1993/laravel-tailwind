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
    {{-- Contenedor principal --}}
    <section class="container py-4">
        {{-- Alinear verticalmente el contenido del div y darle separación de 16px = 1rem --}}
        <div class="flex flex-col gap-4">
            <h1>Layout</h1>

            <div>
                {{-- El float left todavía puede ser aplicado --}}
                <figure class="w-2xl float-left">
                    <img src="https://images.pexels.com/photos/30007522/pexels-photo-30007522/free-photo-of-intrincada-escalera-de-caracol-en-el-faro.jpeg" alt="Sin imagen">
                </figure>
                @foreach ($content as $item)
                    <p class="mb-2">{{ $item }}</p>
                @endforeach
            </div>
        </div>
    </section>
</body>
</html>
