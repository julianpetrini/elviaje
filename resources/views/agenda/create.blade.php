<!-- create.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Crear evento</title>
</head>
<body>
    <h1>Crear evento</h1>

    <!-- Formulario para crear un nuevo evento -->
    <form action="{{ route('agenda.store') }}" method="POST">
        @csrf
        <label for="titulo">Título:</label>
        <input type="text" name="titulo" id="titulo" required><br>
        <label for="descripcion">Descripción:</label>
        <textarea name="descripcion" id="descripcion" required></textarea><br>
        <label for="fecha">Fecha:</label>
        <input type="date" name="fecha" id="fecha" required><br>
        <button type="submit">Guardar</button>
        <a href="{{ url('/') }}">Volver</a>

    </form>
</body>
</html>
