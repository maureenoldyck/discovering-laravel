<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/css/app.css">
        <link rel="icon" href="{{ URL::asset('favicon.ico') }}" type="image/x-icon"/>
        <title>Laravel</title>
    </head>
    <body class="d-flex flex-column">
        @yield('header')
        @yield('content')
        @yield('footer')
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
