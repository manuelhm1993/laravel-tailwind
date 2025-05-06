<x-layouts.app>
    
    @push('js')
        <script>
            const toggleProfileMenu = () => {
                toggleMenu.classList.contains('hidden') ? toggleMenu.classList.remove('hidden') : toggleMenu.classList.add('hidden');
            };

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
                    toggleProfileMenu();
                }
            });
        </script>
    @endpush
</x-layouts.app>
