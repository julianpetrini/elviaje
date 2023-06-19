<!-- resultados.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Resultados</title>
</head>
<body>
    <h1>Resultados</h1>

    <!-- Mostrar los hospedajes -->
    @foreach ($hospedajes as $hospedaje)
        <div>
            <h2>{{ $hospedaje->nombre }}</h2>
            <p>{{ $hospedaje->ubicacion }}</p>
            <!-- Mostrar más información del hospedaje -->
        </div>
    @endforeach
</body>
</html>
