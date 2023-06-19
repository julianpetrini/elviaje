<!-- index.blade.php -->

<h1>Listado de Hospedajes</h1>

@foreach ($hospedajes as $hospedaje)
    <div>
        <h3>{{ $hospedaje->nombre }}</h3>
        <p>{{ $hospedaje->ubicacion }}</p>
        <!-- Mostrar otros campos según sea necesario -->
    </div>
@endforeach

