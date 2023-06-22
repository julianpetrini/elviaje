<h2>Eliminar Comentario</h2>
<p>¿Estás seguro de que deseas eliminar este comentario?</p>
<form action="{{ route('agenda.comentarios.destroy', ['comentario' => $comentario->id]) }}" method="post">
    @csrf
    @method('delete')
    <button type="submit">Eliminar</button>
</form>
<a href="{{ route('agenda.show', ['agenda' => $comentario->agenda_id]) }}">Cancelar</a>
