<!DOCTYPE html>
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
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="font-sans flex flex-col text-center sm:flex-row sm:text-left sm:justify-between py-4 px-6 bg-white shadow sm:items-baseline">
            <div class="mb-2 sm:mb-0">
                <a href="/home" class="text-2xl no-underline text-grey-darkest hover:text-blue-dark">{{ config('app.name', 'Laravel') }}</a>
            </div>
            <div>
                <a href="/one" class="text-lg no-underline text-grey-darkest hover:text-blue-dark ml-2">One</a>
                <a href="/two" class="text-lg no-underline text-grey-darkest hover:text-blue-dark ml-2">Two</a>
                <a href="/three" class="text-lg no-underline text-grey-darkest hover:text-blue-dark ml-2">Three</a>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
