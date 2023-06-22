<!-- Vista de comentarios -->
<h2>Comentarios Esta</h2>

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

