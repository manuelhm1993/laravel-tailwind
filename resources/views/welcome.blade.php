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
        {{-- A diferencia de bootstrap, tailwind no impone un diseño predefinido, se debe hacer el diseño de la tabla y luego crear la clase table con @apply --}}
        <table class="table">
            <thead>
                <tr>
                    <th>País</th>
                    <th>Ciudad</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>Venezuela</td>
                    <td>Maracaibo</td>
                </tr>
                <tr>
                    <td>Colombia</td>
                    <td>Bogotá</td>
                </tr>
                <tr>
                    <td>España</td>
                    <td>Madrid</td>
                </tr>
            </tbody>
        </table>
    </section>
</body>
</html>
