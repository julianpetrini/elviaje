<h2>Editar Comentario</h2>
<form action="{{ route('agenda.comentarios.update', ['agenda' => $comentario->agenda_id, 'comentario' => $comentario->id]) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('put')
    <div>
        <label for="content">Contenido del comentario:</label>
        <textarea name="content" id="content" rows="4" cols="50">{{ $comentario->content }}</textarea>
    </div>
    <div>
        <button type="submit">Actualizar Comentario</button>
    </div>
</form>
