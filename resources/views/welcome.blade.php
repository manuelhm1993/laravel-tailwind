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
    <section class="container py-12 space-y-4">
        {{-- Tailwind no impone un diseño pre-definido, pero proporciona clases para facilitar el mismo, las tres fuentes por defecto que maneja tailwind son font-sans, font-serif, font-mono --}}
        <h1 class="h1">Este es un título de prueba</h1>
        {{-- El interlineado por defecto es leading-6, a partir de ahí se puede disminuir o aumentar --}}
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque aliquid provident iste magni eaque autem ducimus repudiandae accusamus, voluptatum tempora, eos deleniti soluta porro commodi neque architecto, dolores laborum nostrum.
        </p>
        <ul>
            <li>Elemento #01</li>
            <li>Elemento #02</li>
            <li>Elemento #03</li>
        </ul>
    </section>
</body>
</html>
