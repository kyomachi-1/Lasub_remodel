<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    
    <!-- Fontawesome5 -->
    <script src="https://kit.fontawesome.com/72aac185dc.js" crossorigin="anonymous"></script>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    <!-- Styles index.blade.php -->
    <style>
        .hover:hover {
        color: #212529;
        background-color: #cfcec8;
        }
    </style>
</head>

<body>
    <div id="app">

        @component('components.header')
        @endcomponent

        <div class="container">
            <main class="py-4">
                @yield('content')
            </main>
        </div>
    </div>
</body>

</html>