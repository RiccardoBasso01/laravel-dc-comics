<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DC | @yield('title')</title>

    <link rel="icon" href="{{ asset('img/dc-logo.png') }}">

    <!-- Styles -->
    @vite('resources/js/app.js')

    {{-- cdns --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- @yield('cdn') --}}
</head>

<body>
    {{-- header --}}
    @include('includes.header')

    {{-- main --}}
    @yield('main')

    {{-- footer --}}
    @include('includes.footer')

    {{-- scripts --}}
    @yield('scripts')
</body>

</html>
