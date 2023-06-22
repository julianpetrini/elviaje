<h1>Listado de Actividades de Agenda</h1>

<form action="{{ route('agenda.index') }}" method="GET">
    <div>
        <label for="categoria">Filtrar por categoría:</label>
        <select name="categoria" id="categoria">
            <option value="">Todas</option>
            <option value="Beach" {{ request('categoria') == 'Beach' ? 'selected' : '' }}>Beach</option>
            <option value="Foody" {{ request('categoria') == 'Foody' ? 'selected' : '' }}>Foody</option>
            <option value="Visiting" {{ request('categoria') == 'Visiting' ? 'selected' : '' }}>Visiting</option>
            <option value="Shopping" {{ request('categoria') == 'Shopping' ? 'selected' : '' }}>Shopping</option>
        </select>
        <button type="submit">Filtrar</button>
    </div>
</form>

@foreach ($actividades as $actividad)
    <p>{{ $actividad->titulo }}</p>
    <p>{{ $actividad->descripcion }}</p>
    <p>Fecha: {{ $actividad->fecha }}</p>
    <p>Hora de inicio: {{ $actividad->hora_inicio }}</p>
    <a href="{{ route('agenda.show', ['agenda' => $actividad->id]) }}">Ver detalles</a>
    <hr>
@endforeach

<a href="{{ route('agenda.create') }}">Crear nueva actividad de agenda</a>
