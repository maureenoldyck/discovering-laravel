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
        <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
            <a class="navbar-brand" href="/">Home</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link"  href="/welcome">Welcome</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/form">Form</a>
                </li>
              </ul>
            </div>
          </nav>
        @yield('content')
        @yield('footer')
        <footer class="footer sticky-bottom pt-1">
            <p>Discovering Laravel: Made for BeCode Ghent</p>
        </footer>
    </body>
</html>
