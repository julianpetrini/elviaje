<!-- create.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Crear Hospedaje</title>
</head>
<body>
    <h1>Crear Hospedaje</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('hospedajes.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <!-- Campos del formulario -->
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" value="{{ old('nombre') }}">
        <br>

        <label for="ubicacion">Ubicación:</label>
        <input type="text" name="ubicacion" id="ubicacion" value="{{ old('ubicacion') }}">
        <br>

        <label for="checkin">Check-In:</label>
        <input type="date" name="checkin" id="checkin" value="{{ old('checkin') }}">
        <br>

        <label for="checkout">Check-Out:</label>
        <input type="date" name="checkout" id="checkout" value="{{ old('checkout') }}">
        <br>

        <label for="stars">Estrellas:</label>
        <select name="stars" id="stars">
            <option value="1">1 estrella</option>
            <option value="2">2 estrellas</option>
            <option value="3">3 estrellas</option>
            <option value="4">4 estrellas</option>
            <option value="5">5 estrellas</option>
        </select>
        <br>

        <label for="descripcion">Descripción:</label>
        <textarea name="descripcion" id="descripcion">{{ old('descripcion') }}</textarea>
        <br>

        <label for="foto">Foto:</label>
        <input type="file" name="foto" id="foto">
        <br>

        <!-- Agregar más campos aquí -->

        <button type="submit">Guardar</button>
    </form>
</body>
</html>
