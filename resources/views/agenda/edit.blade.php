<h1>Editar Actividad de Agenda</h1>

<form action="{{ route('agenda.update', ['agenda' => $agenda->id]) }}" method="post">
    @csrf
    @method('put')

    <label for="titulo">Título:</label>
    <input type="text" name="titulo" id="titulo" value="{{ $agenda->titulo }}">

    <label for="categoria">Categoría:</label>
    <input type="text" name="categoria" id="categoria" value="{{ $agenda->categoria }}">

    <label for="fecha">Fecha:</label>
    <input type="date" name="fecha" id="fecha" value="{{ $agenda->fecha }}">

    <label for="hora_inicio">Hora de inicio:</label>
    <input type="time" name="hora_inicio" id="hora_inicio" value="{{ $agenda->hora_inicio }}">

    <label for="hora_fin">Hora de fin:</label>
    <input type="time" name="hora_fin" id="hora_fin" value="{{ $agenda->hora_fin }}">

    <label for="descripcion">Descripción:</label>
    <textarea name="descripcion" id="descripcion">{{ $agenda->descripcion }}</textarea>

    <!-- Agrega más campos del formulario según la estructura de tu tabla -->

    <button type="submit">Guardar cambios</button>
</form>

<a href="{{ route('agenda.show', ['agenda' => $agenda->id]) }}">Cancelar</a>
<button type="button" onclick="window.history.back()">Volver</button>
