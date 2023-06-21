<!DOCTYPE html>
<html>
<head>
    <title>Editar Plan</title>
</head>
<body>
    <h1>Editar Plan</h1>

    <form action="{{ route('agenda.update', $agenda->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="titulo">Título:</label>
        <input type="text" name="titulo" value="{{ $agenda->titulo }}">
        <br>

        <label for="descripcion">Descripción:</label>
        <textarea name="descripcion">{{ $agenda->descripcion }}</textarea>
        <br>

        <label for="fecha">Fecha:</label>
        <input type="date" name="fecha" value="{{ $agenda->fecha }}">
        <br>

        <button type="submit">Guardar cambios</button>
        <a href="{{ url('/') }}">Volver</a>

    </form>
</body>
</html>
