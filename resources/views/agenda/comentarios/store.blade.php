<!-- Vista de comentarios -->
<h2>ComentarioXX</h2>

<!-- Muestra los comentarios existentes -->
@if(count($comentarios) > 0)
    <ul>
        @foreach($comentarios as $comentario)
            <li>{{ $comentario->content }}</li>
        @endforeach
    </ul>
@else
    <p>No hay comentarios</p>
@endif

<!-- Agregar comentario -->
<h2>Agregar Comentario</h2>
<form action="{{ route('agenda.comentarios.store', ['agenda' => $agenda->id]) }}" method="post" enctype="multipart/form-data">
    @csrf
    <div>
        <label for="content">Contenido del comentario:</label>
        <textarea name="content" id="content" rows="4" cols="50"></textarea>
    </div>
    <div>
        <label for="image">Imagen:</label>
        <input type="file" name="image" id="image">
    </div>
    <div>
        <button type="submit">Agregar Comentario</button>
    </div>
</form>

<!-- Volver atrás -->
<a href="{{ url()->previous() }}">Volver atrás</a>
