@extends('layouts.fondo')




@section('content')

    <h1>Detalles de la Actividad de Agenda</h1>

    <p>Título: {{ $agenda->titulo }}</p>
    <p>Descripción: {{ $agenda->descripcion }}</p>

    <!-- Mostrar más detalles de la actividad -->
    @auth
        <a href="{{ route('agenda.edit', ['agenda' => $agenda->id]) }}">Editar</a>

        <form action="{{ route('agenda.destroy', ['agenda' => $agenda->id]) }}" method="post">
            @csrf
            @method('delete')
            <button type="submit">Eliminar</button>
        </form>
    @endauth

    <a href="{{ route('agenda.index') }}">Volver al listado de actividades de agenda</a>

    @foreach ($agenda->comments as $comment)
        <div class="image-container">
            @if ($comment->image)
                <img src="{{ Storage::url($comment->image) }}" alt="Comentario Imagen">
            @endif
        </div>
    @endforeach





    <h2>Comentarios</h2>

    @if ($agenda->comments->count() > 0)
        @foreach ($agenda->comments as $comment)
            <div id="comment_{{ $comment->id }}"
                class="{{ $comment->id == request()->input('comment') ? 'highlighted' : '' }}">

                <p><a
                        href="{{ route('agenda.comentarios.show', ['agenda' => $agenda->id, 'comentario' => $comment->id]) }}">{{ $comment->content }}</a>
                </p>

            </div>
        @endforeach
    @else
        <p>Aún no hay comentarios disponibles.</p>
    @endif




    @auth


        <!-- Formulario para agregar un nuevo comentario -->
        <h2>Agregar Comentario</h2>
        <form action="{{ route('agenda.comentarios.storeAgenda', ['agenda' => $agenda->id]) }}" method="post"
            enctype="multipart/form-data">
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
    @endauth
   
@endsection
