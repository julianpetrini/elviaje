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

            <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Baskervville:ital@0;1&family=Blinker:wght@100;200;300;400;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">


</head>

<body id="app">
    <div class="hexagon-container">
        <div class="hexagon"></div>
      </div>

 
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




