<h2>Detalles del Comentario</h2>
<p>{{ $comentario->content }}</p>

<a href="{{ route('agenda.comentarios.edit', ['agenda' => $comentario->agenda_id, 'comentario' => $comentario->id]) }}">Editar</a>
<a href="{{ route('agenda.comentarios.confirm-delete', ['agenda' => $comentario->agenda_id, 'comentario' => $comentario->id]) }}">Eliminar</a>

<a href="{{ route('agenda.show', ['agenda' => $comentario->agenda_id]) }}">Volver a la actividad de agenda</a>
