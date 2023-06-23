
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
                @if ($comentario->image)
                <img src="{{ asset('storage/' . $comentario->image) }}" alt="Imagen del Comentario">
                @endif
            </div>
            <div class="card-footer">
            

                
                
                <a href="{{ route('agenda.show', ['agenda' => $comentario->agenda->id, 'comentario' => $comentario->id]) }}" class="btn btn-secondary">Volver</a>
            </div>
        </div>
    </div>



