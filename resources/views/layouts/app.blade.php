<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        <header class="border-b">
            <nav class="flex justify-between items-center">
                <a href="#" class="ml-10 text-3xl text-green-500 font-bold">NewGarden.</a>
                <ul class="flex justify-between items-center my-6">
                    <li class="ml-20">
                        <a href="#" class="m-4 font-bold hover:text-green-500">Accueil</a>
                    </li>
                    <li class="ml-20">
                        <a href="#section2" class="m-4 font-bold hover:text-green-500">Composant</a>
                    </li>
                    <li class="ml-20">
                        <a href="#section3" class="m-4 font-bold hover:text-green-500">Précommander</a>
                    </li>
                    <li class="ml-20">
                        <a href="#section4" class="m-4 font-bold hover:text-green-500">Contact</a>
                    </li>
                </ul>
                <div class="hidden">
                    <span class="block w-4 h-1"></span>
                    <span class="block w-4 h-1"></span>
                    <span class="block w-4 h-1"></span>
                </div>
            </nav>
        </header>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>

</html>