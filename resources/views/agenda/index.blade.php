<h1>Listado de Actividades de Agenda</h1>


@foreach ($actividades as $actividad)
    <p>{{ $actividad->titulo }}</p>
    <p>{{ $actividad->descripcion }}</p>
    <a href="{{ route('agenda.show', ['agenda' => $actividad->id]) }}">Ver detalles</a>
    <hr>
@endforeach

@auth
<a href="{{ route('agenda.create') }}">Crear nueva actividad de agenda</a>
@endauth


