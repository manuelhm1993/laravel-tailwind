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
        <table class="border-collapse border border-gray-500">
            <thead>
                <tr>
                    <th class="border border-gray-400 px-4 py-2 text-gray-800">País</th>
                    <th class="border border-gray-400 px-4 py-2 text-gray-800">Ciudad</th>
                </tr>
            </thead>

            <tbody>
                <tr class="bg-gray-200">
                    <td class="border border-gray-400 px-4 py-2">Venezuela</td>
                    <td class="border border-gray-400 px-4 py-2">Maracaibo</td>
                </tr>
                <tr>
                    <td class="border border-gray-400 px-4 py-2">Colombia</td>
                    <td class="border border-gray-400 px-4 py-2">Bogotá</td>
                </tr>
                <tr class="bg-gray-200">
                    <td class="border border-gray-400 px-4 py-2">España</td>
                    <td class="border border-gray-400 px-4 py-2">Madrid</td>
                </tr>
            </tbody>
        </table>
    </section>
</body>
</html>
