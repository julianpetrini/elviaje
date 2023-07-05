@extends('layouts.fondo')

@include('navbar')

@section('content')

<div class="container">

    <div class="row">
        <div class="col-md-6">
            <div class="image-container">
                @if ($agenda->imagen)
                    <img src="{{ asset($agenda->imagen) }}" alt="Imagen de la Actividad" class="img-fluid">
                @endif
            </div>
        </div>
        <div class="col-md-6">
            <h1>This is the plan!</h1>

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
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-12">
            <h2>Comentarios</h2>

            @if ($agenda->comments->count() > 0)
                @foreach ($agenda->comments as $comment)
                    <div id="comment_{{ $comment->id }}"
                        class="{{ $comment->id == request()->input('comment') ? 'highlighted' : '' }}">

                        <p>
                            <a href="{{ route('agenda.comentarios.show', ['agenda' => $agenda->id, 'comentario' => $comment->id]) }}">
                                {{ $comment->content }}
                            </a>
                        </p>

                        @if ($comment->image)
                            <div class="image-container">
                                <img src="{{ Storage::url($comment->image) }}" alt="Comentario Imagen" class="img-fluid">
                            </div>
                        @endif
                    </div>
                @endforeach
            @else
                <p>Aún no hay comentarios disponibles.</p>
            @endif
        </div>
    </div>

    @auth
        <!-- Formulario para agregar un nuevo comentario -->
        <div class="row mt-4">
            <div class="col-md-12">
                <h2>Agregar Comentario</h2>
                <form action="{{ route('agenda.comentarios.storeAgenda', ['agenda' => $agenda->id]) }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="content">Contenido del comentario:</label>
                        <textarea name="content" id="content" rows="4" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="image">Imagen:</label>
                        <input type="file" name="image" id="image" class="form-control-file">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Agregar Comentario</button>
                    </div>
                </form>
            </div>
        </div>
    @endauth

</div>
@endsection
