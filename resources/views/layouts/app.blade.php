<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Internastek</title>

    @vite('resources/css/app.css')
    @yield('style')
    <style>
        /* Custom transition for expanding effect */
        #menu {
            max-height: 0;
            transition: max-height 0.3s ease-out;
            overflow: hidden;
        }

        #menu.expanded {
            max-height: 500px;
            /* Adjust the height according to the content */
        }
    </style>
</head>

<body>
    <div class="h-screen">
        <!-- Include the header component -->
        @include('components.header')

        <div class="h-full md:pt-16">
            @yield('content')
        </div>
    </div>

    <!-- Script to toggle menu -->
    <script>
        const menuBtn = document.getElementById('menu-btn');
        const menu = document.getElementById('menu');

        menuBtn.addEventListener('click', () => {
            menu.classList.toggle('hidden');
            menu.classList.toggle('expanded');
        });
    </script>
</body>

</html>
