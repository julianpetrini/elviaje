
    <h1>Crear nueva actividad de agenda</h1>

    <form action="{{ route('agenda.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div>
            <label for="titulo">Título:</label>
            <input type="text" name="titulo" id="titulo" required>
        </div>

        
        <div>
            <label for="categoria">Categoría:</label>
            <select name="categoria" id="categoria" required>
                <option value="Beach">Beach</option>
                <option value="Foody">Foody</option>
                <option value="Visiting">Visiting</option>
                <option value="Shopping">Shopping</option>
            </select>
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
            <input type="time" name="hora_fin" id="hora_fin" >
        </div>

        <div>
            <label for="imagen">Imagen:</label>
            <input type="file" name="imagen" id="imagen" accept="image/*" >
        </div>

        <div>
            <label for="descripcion">Descripción:</label>
            <textarea name="descripcion" id="descripcion" rows="4" ></textarea>
        </div>

        <div>
            <button type="submit">Crear actividad</button>
            <a href="{{ route('agenda.index') }}">Volver</a>
        </div>
    </form>

