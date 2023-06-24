@extends('layouts.fondo')

@section('content')
    <h1>Cargar Hospedaje</h1>

    <form action="{{ route('hospedajes.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div>
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>
        </div>

        <div>
            <label for="ubicacion">Ubicación:</label>
            <input type="text" id="ubicacion" name="ubicacion" required>
        </div>

        <div>
            <label for="check_in">Check-in:</label>
            <input type="date" id="check_in" name="check_in" required>
        </div>

        <div>
            <label for="check_out">Check-out:</label>
            <input type="date" id="check_out" name="check_out" required>
        </div>

        <div>
            <label for="stars">Estrellas:</label>
            <input type="number" id="stars" name="stars" required>
        </div>

        <div>
            <label for="descripcion">Descripción:</label>
            <textarea id="descripcion" name="descripcion"></textarea>
        </div>

        <div>
            <label for="foto">Foto:</label>
            <input type="file" id="foto" name="foto">
        </div>

        <button type="submit">Guardar</button>
    </form>
@endsection
