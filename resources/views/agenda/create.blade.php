
    <h1>Crear nueva actividad de agenda</h1>

    <form action="{{ route('agenda.store') }}" method="POST">
        @csrf

        <div>
            <label for="titulo">Título:</label>
            <input type="text" name="titulo" id="titulo" required>
        </div>

        <div>
            <label for="categoria">Categoría:</label>
            <input type="text" name="categoria" id="categoria" required>
        </div>

        <div>
            <label for="fecha">Fecha:</label>
            <input type="date" name="fecha" id="fecha" required>
        </div>

        <div>
            <label for="hora_inicio">Hora de inicio:</label>
            <input type="time" name="hora_inicio" id="hora_inicio" required>
        </div>

        <div>
            <label for="hora_fin">Hora de fin:</label>
            <input type="time" name="hora_fin" id="hora_fin" required>
        </div>

        <div>
            <label for="imagen">Imagen:</label>
            <input type="file" name="imagen" id="imagen" accept="image/*" required>
        </div>

        <div>
            <label for="descripcion">Descripción:</label>
            <textarea name="descripcion" id="descripcion" rows="4" required></textarea>
        </div>

        <div>
            <button type="submit">Crear actividad</button>
            <a href="{{ route('agenda.index') }}">Volver</a>
        </div>
    </form>

