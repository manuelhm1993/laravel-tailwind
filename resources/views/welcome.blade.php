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
    <section class="container py-5">
        {{-- Alinear verticalmente el contenido del div y darle separación de 16px = 1rem --}}
        <div class="flex flex-col gap-4">
            <h1>Tablas</h1>
            {{-- A diferencia de bootstrap, tailwind no impone un diseño predefinido, se debe hacer el diseño de la tabla y luego crear la clase table con @apply --}}
            <table class="table border-separate md:border-collapse table-fixed">
                <thead>
                    <tr>
                        {{-- Fijar el tamaño de las columnas, la tabla debe tener la clase table-fixed --}}
                        <th class="w-1/4">País</th>
                        <th class="w-1/4">Ciudad</th>
                        <th class="w-1/2">Descripción</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Venezuela</td>
                        <td>Maracaibo</td>
                        <td>{{ $content[0] }}</td>
                    </tr>
                    <tr>
                        <td>Colombia</td>
                        <td>Bogotá</td>
                        <td>{{ $content[1] }}</td>
                    </tr>
                    <tr>
                        <td>España</td>
                        <td>Madrid</td>
                        <td>{{ $content[2] }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
</body>
</html>
