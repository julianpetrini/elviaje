<!-- create.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Crear Hospedaje</title>
</head>
<body>
    <h1>Crear Hospedaje</h1>

    <!-- Formulario para crear el hospedaje -->
    <form action="{{ route('hospedajes.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" required>
        <br>
        <label for="ubicacion">Ubicación:</label>
        <input type="text" name="ubicacion" id="ubicacion" required>
        <br>
        <label for="check_in">Check-in:</label>
        <input type="date" name="check_in" id="check_in">
        <br>
        <label for="check_out">Check-out:</label>
        <input type="date" name="check_out" id="check_out">
        <br>
        <label for="stars">Estrellas:</label>
        <input type="number" name="stars" id="stars" required>
        <br>
        <label for="descripcion">Descripción:</label>
        <textarea name="descripcion" id="descripcion"></textarea>
        <br>
       <!-- <label for="foto">Foto:</label>
        <input type="file" name="foto" id="foto">
        <br>-->
        <button type="submit">Guardar</button>
    </form>
    <a href="{{ url('/') }}">Volver a la página principal</a>
</body>
</html>
