<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body id="app">


    @include('navbar')
    @yield('weather')

    <div class="container">
        <!-- Aquí puedes incluir una barra de navegación, encabezado u otros elementos comunes -->

        <!-- Contenido de la página -->
        <div class="max-w-screen-lg mx-auto">
            @yield('content')
        </div>
    </div>

    <!-- Puedes incluir los scripts de JavaScript si es necesario -->

    <!-- Puedes agregar otros scripts si los necesitas -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.5.0/js/bootstrap.bundle.min.js"></script>
    <script src="{{ mix('js/app.js') }}"></script>
</body>

</html>
