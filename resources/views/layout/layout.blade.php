<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap"  />
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
        {{-- <style>
           footer{
            background:#eee;
            padding:20px;
            text-align:center
           }
        </style> --}}

        @vite(['resources/scss/app.scss'])
    </head>
    @guest
<a href="{{ route('login') }}">Login</a>
@if (Route::has('register'))
<a href="{{ route('register') }}">Register</a>
@endif
@else
<a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
Logout
</a>
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
@csrf
</form>
@endguest

    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        @yield('content')

        <footer>2020</footer>
    </body>
</html>