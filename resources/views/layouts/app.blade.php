<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Internastek</title>

    @vite('resources/css/app.css')
</head>

<body>
    <div class="min-h-dvh">
        <!-- Include the header component -->
        @include('components.header')
    
        <main>
            @yield('content') <!-- Main content goes here -->
        </main>
    </div>
</body>

</html>
