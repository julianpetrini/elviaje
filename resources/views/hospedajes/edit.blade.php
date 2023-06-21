<!DOCTYPE html>
<html>
<head>
    <title>Editar Hospedaje</title>
</head>
<body>
    <h1>Editar Hospedaje</h1>

    <form action="{{ route('hospedajes.update', $hospedaje->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" value="{{ $hospedaje->nombre }}" required>
        </div>

        <div>
            <label for="ubicacion">Ubicación:</label>
            <input type="text" name="ubicacion" value="{{ $hospedaje->ubicacion }}" required>
        </div>

        <div>
            <label for="check_in">Check-in:</label>
            <input type="text" name="check_in" value="{{ $hospedaje->check_in }}" required>
        </div>

        <div>
            <label for="check_out">Check-out:</label>
            <input type="text" name="check_out" value="{{ $hospedaje->check_out }}" required>
        </div>

        <div>
            <label for="stars">Estrellas:</label>
            <input type="number" name="stars" value="{{ $hospedaje->stars }}" required>
        </div>

        <div>
            <label for="descripcion">Descripción:</label>
            <textarea name="descripcion" required>{{ $hospedaje->descripcion }}</textarea>
        </div>

        <div>
            <label for="foto">Foto:</label>
            <input type="file" name="foto">
        </div>

        <button type="submit">Guardar cambios</button>
    </form>

    <a href="{{ route('resultados') }}">Volver</a>
</body>
</html>
