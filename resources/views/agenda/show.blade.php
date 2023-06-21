<!DOCTYPE html>
<html>
<head>
    <title>Detalle del Plan</title>
</head>
<body>
    <h1>Detalle del Plan</h1>

    <h2>{{ $agenda->titulo }}</h2>
    <p>{{ $agenda->descripcion }}</p>
    <p>Fecha: {{ $agenda->fecha }}</p>

    <a href="{{ route('agenda.edit', $agenda->id) }}">Editar</a>

    <form action="{{ route('agenda.destroy', $agenda->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Eliminar</button>
        <a href="{{ url('/') }}">Volver</a>

    </form>
</body>
</html>
