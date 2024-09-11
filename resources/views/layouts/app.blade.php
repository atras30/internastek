<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Internastek</title>

    @vite('resources/css/app.css')
    @yield('style')
</head>

<body>
    <div class="h-screen">
        <!-- Include the header component -->
        @include('components.header')
    
        <div class="h-full pt-16">
            @yield('content')
        </div>
    </div>
</body>

</html>
