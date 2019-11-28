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
        body{
            margin: 0;
            padding: 0;
        }
        
        .card_front {
            width: 100%;
            padding: 0;
            height: 500px;
            color: #FFFFFF;
            background: #C3A572;
            font-size: 28px;
            }
        .card_back {
            width: 100%;
            padding: 0;
            height: 500px;
            color: #FFFFFF;
            background: #008499;
            font-size: 28px;
        }
        
        .card-text {
            display: flex;
            height: 500px;
            padding: 32px;
            align-items: center;
            justify-content: center;
        }

@media screen and (min-width:300px) and (max-width:820px) {

    html {
        width: 100%;
        height: 100%;
    }

    body {
        width: 100%;
        height: 100%;
    }
    .comtainer {
        width: 100%;
    }
    .container-fluid {
        width: 100%;
        padding: 0;
        height: 100%;    
    }
    .navbar {
        height: 10%;
    }
    .row-container {
        width: 100%;
        padding: 0;
        margin: 0 auto;
        height: 85%;      
    }

    .card_front {
        width: 100%;
        margin: 0;
        padding: 0;
        height: 100%;
        color: #FFFFFF;
        background: #C3A572;
        }
    
    .card_back {
        width: 100%;
        margin: 0;
        padding: 0;
        height: 100%;
        color: #FFFFFF;
        background: #008499;
    }

    .row-button-container {
        width: 100%;
        padding: 0;
        margin: 0 auto;
        height: 5%;     
    }
}
    </style>
</head>

<body class="h-100">
    <div id="app" class="h-100">

        @component('components.header')
        @endcomponent

        <div class="container p-0 h-100">
            <main class="h-100">
                @yield('content')
            </main>
        </div>
    </div>
</body>

</html>