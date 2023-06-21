<!-- index.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Agenda</title>
</head>
<body>
    <h1>Agenda</h1>
    <a href="{{ url('/') }}">Volver</a>

    <!-- Mostrar la lista de eventos de la agenda -->
    <ul>
        @foreach ($eventos as $evento)
            <li>{{ $evento->titulo }}</li>
        @endforeach
    </ul>

    <!-- Enlace para crear un nuevo evento -->
    <a href="{{ route('agenda.create') }}">Crear evento</a>
</body>
</html>
