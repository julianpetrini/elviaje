<!-- index.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Listado de Hospedajes</title>
</head>
<body>
    <h1>Listado de Hospedajes</h1>

    @if (count($hospedajes) > 0)
        <ul>
            @foreach ($hospedajes as $hospedaje)
                <li>{{ $hospedaje->nombre }}</li>
            @endforeach
        </ul>
    @else
        <p>No hay hospedajes disponibles.</p>
    @endif
</body>
</html>
