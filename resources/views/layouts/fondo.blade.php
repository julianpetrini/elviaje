<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Baskervville:ital@0;1&family=Blinker:wght@100;200;300;400;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">


</head>

<body id="app">
    <div>
        <!-- Aquí puedes incluir una barra de navegación, encabezado, u otros elementos comunes -->

        <!-- Contenido de la página -->
        @yield('content')
    </div>

    <!-- Aquí puedes incluir los scripts de JavaScript si es necesario -->

    <!-- Puedes agregar otros scripts si los necesitas -->

    @yield('scripts')
</body>

</html>
