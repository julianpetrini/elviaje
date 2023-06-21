<!-- show.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Detalle del Hospedaje</title>
</head>
<body>
    <h1>Detalle dessssl Hospedaje</h1>

    <h2>{{ $hospedaje->nombre }}</h2>
    <p>{{ $hospedaje->ubicacion }}</p>
    <p>Check-in: {{ $hospedaje->check_in }}</p>
    <p>Check-out: {{ $hospedaje->check_out }}</p>
    <p>Estrellas: {{ $hospedaje->stars }}</p>
    <p>{{ $hospedaje->descripcion }}</p>
    <img src="{{ asset($hospedaje->foto) }}" alt="Foto del hospedaje">

    <!-- Enlaces para editar y eliminar el hospedaje si el usuario tiene los permisos adecuados -->
    @auth
       
            <a href="{{ route('hospedajes.edit', $hospedaje->id) }}">Editar</a>
      

        
            <form action="{{ route('hospedajes.destroy', $hospedaje->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Eliminar</button>
            </form>
            <a href="{{ route('resultados') }}">Volver</a>
    @endauth
</body>
</html>

