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

            {{-- TailwindCSS por defecto usa box-sizing: border-box; esto puede ser modificado --}}
            <div class="bg-gray-300 w-64 h-32 p-8 border-8 border-gray-500 box-content">
                <div class="bg-gray-500 w-full h-full">

                </div>
            </div>

            <button type="button" id="switch" class="btn btn-blue w-xs">Switch</button>
        </div>
    </section>

    <script>
        document.addEventListener('click', (e) => {
            const target = e.target;

            if(target.id === 'switch')
            {
                const content = document.querySelector('.container h1~div');

                if(content.classList.contains('box-content'))
                {
                    content.classList.remove('box-content');
                    content.classList.add('box-border');
                }
                else 
                {
                    content.classList.remove('box-border');
                    content.classList.add('box-content');
                }
            }
        });
    </script>
</body>
</html>
