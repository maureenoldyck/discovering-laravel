<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/css/app.css">

        <title>Laravel</title>

    </head>
    <body>
        @yield('header')
            <div class="links">
                <a href="/test?name=maureen">Test</a>
                <a href="/welcome">Welcome</a>
                <a href="/posts/my-first-post">Post</a>
            </div>
        @yield('content')
        @yield('footer')
    </body>
</html>
