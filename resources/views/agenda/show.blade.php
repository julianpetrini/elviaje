<h1>Detalles de la Actividad de Agenda</h1>

<p>Título: {{ $agenda->titulo }}</p>
<p>Descripción: {{ $agenda->descripcion }}</p>

<!-- Mostrar más detalles de la actividad -->

<a href="{{ route('agenda.edit', ['agenda' => $agenda->id]) }}">Editar</a>

<form action="{{ route('agenda.destroy', ['agenda' => $agenda->id]) }}" method="post">
    @csrf
    @method('delete')
    <button type="submit">Eliminar</button>
</form>

<a href="{{ route('agenda.index') }}">Volver al listado de actividades de agenda</a>
