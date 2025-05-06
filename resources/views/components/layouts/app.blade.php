<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel - Tailwindcss</title>

    @stack('css')

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @livewireStyles
</head>
<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
        {{-- Llamar a un componente de livewire --}}
        @livewire('navigation')

        {{-- Contenedor principal --}}
        <main>
            {{ $slot }}
        </main>
    </div>

    <script>
        let toggleMenu = null;
        
        window.addEventListener('load', (e) => {
            toggleMenu = document.querySelector('div[aria-labelledby="user-menu-button"]');

            toggleProfileMenu(toggleMenu);
        });

        document.addEventListener('click', (e) => {
            const target = e.target;
            const btn = target.closest('button');

            if(btn.id === 'user-menu-button') 
            {
                toggleProfileMenu(toggleMenu);
            }
        });
    </script>

    @stack('js')

    @livewireScripts
</body>
</html>
