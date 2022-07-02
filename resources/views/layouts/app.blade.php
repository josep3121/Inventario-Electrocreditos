<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link href="{{ url('/assets/bootstrap/css/bootstrap.min.css') }}"
        rel="stylesheet">
        <link href="{{ url('/assets/bootstrap/css/style.css') }}"
        rel="stylesheet">
        <link rel="stylesheet" href="css/mdb.min.css">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
      
            @include('layouts.navigation')
        <div>

            @yield('content')

        </div>

    </body>
</html>
