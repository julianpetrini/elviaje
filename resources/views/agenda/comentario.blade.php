@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Detalles del Comentario</h2>
        <div class="card">
            <div class="card-header">
                <h4>{{ $comentario->content }}</h4>
            </div>
            <div class="card-body">
                <h5>Actividad: {{ $comentario->agenda->titulo }}</h5>
                <p>Fecha: {{ $comentario->agenda->fecha }}</p>
                <p>Descripción: {{ $comentario->agenda->descripcion }}</p>
                <p>Comentario: {{ $comentario->content }}</p>
            </div>
            <div class="card-footer">
                <a href="{{ route('agenda.comentarios.edit', ['agenda' => $comentario->agenda->id, 'comentario' => $comentario->id]) }}"
                    class="btn btn-primary">Editar</a>
                <a href="{{ route('agenda.comentarios.confirm-delete', ['agenda' => $comentario->agenda->id, 'comentario' => $comentario->id]) }}"
                    class="btn btn-danger">Eliminar</a>
                <a href="{{ route('agenda.show', ['id' => $comentario->agenda->id]) }}" class="btn btn-secondary">Volver</a>
            </div>
        </div>
    </div>
@endsection
