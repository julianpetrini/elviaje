<!-- resultados.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Resultados</title>
</head>
<body>
    <h1>Resultados</h1>
    <a href="{{ url('/') }}">Volver a la página principal</a>
    <!-- Mostrar los hospedajes -->
    @foreach ($hospedajes as $hospedaje)
    <div>
        <h2>{{ $hospedaje->nombre }}</h2>
        <p>{{ $hospedaje->ubicacion }}</p>
        <p>{{ $hospedaje->check_in }}</p>
        <p>{{ $hospedaje->check_out }}</p>
        <p>{{ $hospedaje->stars }}</p>
        <p><a href="{{ route('hospedajes.show', $hospedaje->id) }}">{{ $hospedaje->descripcion }}</a></p>
    </div>
@endforeach
</body>
</html>
