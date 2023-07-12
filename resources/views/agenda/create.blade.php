@extends('layouts.fondo')

@section('content')
@include('navbar')
<div class="container">
    

    <img src="{{ asset('imagenes/plan.png') }}" alt="Plan" class="img-fluid mx-auto d-block">
    <h1 class="text-center" >Let's make a plan</h1>
    <form action="{{ route('agenda.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="titulo">Title:</label>
            <input type="text" name="titulo" id="titulo" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="categoria">Category:</label>
            <select name="categoria" id="categoria" class="form-control" required>
                <option value="Beach">Beach</option>
                <option value="Foody">Foody</option>
                <option value="Visiting">Visiting</option>
                <option value="Shopping">Shopping</option>
            </select>
        </div>

        <div class="form-group">
            <label for="fecha">Date:</label>
            <input type="date" name="fecha" id="fecha" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="hora_inicio">Starting time:</label>
            <input type="time" name="hora_inicio" id="hora_inicio" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="hora_fin">Ending time:</label>
            <input type="time" name="hora_fin" id="hora_fin" class="form-control">
        </div>

        <div class="form-group">
            <label for="imagen">Image:</label>
            <input type="file" name="imagen" id="imagen" class="form-control-file file-input" accept="image/*">
        </div>

        <div class="form-group">
            <label for="descripcion">Description:</label>
            <textarea name="descripcion" id="descripcion" rows="4" class="form-control"
                style="margin-bottom: 10px; padding: 8px;"></textarea>
        </div>

        <div class="form-group" style="margin-bottom: 10px; text-align: center;">
            <button type="submit" class="btn btn-primary button-primary">Create plan</button>
            <a href="{{ route('agenda.index') }}" class="btn btn-secondary button-secondary">Back</a>
        </div>
        
    </form>
</div>

@endsection
