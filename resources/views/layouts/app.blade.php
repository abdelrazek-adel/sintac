<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset("fontawesome/css/all.min.css") }}" />
    <link rel="stylesheet" href="{{ asset("css/min.css") }}">
    @yield('css')
    <title>sintac code - @yield('title')</title>
</head>
<body>
    <section>
        @yield('header')
        @yield('content')
    </section>
    @yield('js')
</body>
</html>
