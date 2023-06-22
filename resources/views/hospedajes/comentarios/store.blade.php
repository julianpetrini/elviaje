<!-- Vista para agregar un comentario al hospedaje -->
<form action="{{ route('hospedajes.comentarios.store', ['hospedaje' => $hospedaje->id]) }}" method="post" enctype="multipart/form-data">
    @csrf

    <!-- Campos del formulario -->
    <textarea name="content" rows="3" required></textarea>
    <input type="file" name="image">

    <!-- Botón de enviar -->
    <button type="submit">Agregar Comentario</button>
</form>
