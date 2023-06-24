@extends('layouts.fondo')

@section('content')
<div class="container">
    <h1 class="text-center">New place to stay</h1>

    

    <form action="{{ route('hospedajes.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="nombre">Name:</label>
            <input type="text" id="nombre" name="nombre" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="ubicacion">Location:</label>
            <input type="text" id="ubicacion" name="ubicacion" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="check_in">Check-in:</label>
            <input type="date" id="check_in" name="check_in" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="check_out">Check-out:</label>
            <input type="date" id="check_out" name="check_out" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="stars">Stars:</label>
            <input type="number" id="stars" name="stars" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="descripcion">Description:</label>
            <textarea id="descripcion" name="descripcion" class="form-control"></textarea>
        </div>

        <div class="form-group">
            <label for="foto">Image:</label>
            <input type="file" id="foto" name="foto" class="form-control-file">
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-primary mx-2">Save</button>
            <a href="{{ route('hospedajes.index') }}" class="btn btn-secondary mx-2">Back</a>
        </div>
    </form>
</div>
@endsection
