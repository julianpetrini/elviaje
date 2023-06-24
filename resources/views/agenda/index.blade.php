@extends('layouts.fondo')


@section('content')


    <div class="weather-container">
        <div class="weather-info">
            <h2>{{ $weatherData['currentDay'] }}</h2>
            <img src="{{ $weatherData['weatherIcon'] }}" alt="Weather Icon">
            <p class="temperature">{{ $weatherData['temperature'] }} °C</p>
            <div class="weather-date">
                <p>{{ $weatherData['currentDate'] }}</p>
            </div>
        </div>
    </div>


    <!-- Carrusel con la actividad más próxima -->
    @if ($actividades->isNotEmpty())
        <div id="carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                @php
                    $actividadProxima = $actividades->first();
                @endphp
                @foreach ($actividades as $actividad)
                    <div class="carousel-item{{ $actividad->id == $actividadProxima->id ? ' active' : '' }}">
                        <img src="{{ asset($actividad->imagen) }}" alt="{{ $actividad->titulo }}" class="carousel-image">
                        <h3 class="text-xl font-semibold">{{ $actividad->titulo }}</h3>
                        <p>{{ $actividad->descripcion }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    @endif


    <a href="{{ url('/') }}" class="btn btn-primary">Volver</a>



    <!-- Resto del contenido -->
    <form action="{{ route('agenda.index') }}" method="GET">
        <div class="mb-4">
            <label for="categoria" class="mr-2">Filtrar por categoría:</label>
            <select name="categoria" id="categoria" class="border border-gray-300 rounded-md p-1">
                <option value="">Todas</option>
                <option value="Beach" {{ request('categoria') == 'Beach' ? 'selected' : '' }}>Beach</option>
                <option value="Foody" {{ request('categoria') == 'Foody' ? 'selected' : '' }}>Foody</option>
                <option value="Visiting" {{ request('categoria') == 'Visiting' ? 'selected' : '' }}>Visiting</option>
                <option value="Shopping" {{ request('categoria') == 'Shopping' ? 'selected' : '' }}>Shopping</option>
            </select>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md ml-2">Filtrar</button>
        </div>
    </form>


    @foreach ($actividades->groupBy('fecha')->sortKeys() as $fecha => $actividadesDia)
        <a href="{{ route('agenda.show', ['agenda' => $actividad->id]) }}" class="block mb-6">
            @php
                $fechaTitulo = Carbon\Carbon::parse($fecha)
                    ->locale('en')
                    ->isoFormat('dddd DD.MM');
            @endphp
            <h2 class="text-2xl font-semibold mb-2">{{ $fechaTitulo }}</h2>
            @foreach ($actividadesDia->sortBy('hora_inicio') as $actividad)
                <p class="mb-1"><strong></strong> {{ substr($actividad->hora_inicio, 0, 5) }}</p>
                <p class="mb-4"><strong></strong> {{ $actividad->titulo }}</p>
            @endforeach
        </a>
    @endforeach

    <a href="{{ route('agenda.create') }}" class="bg-green-500 text-white px-4 py-2 rounded-md">Crear nueva actividad de
        agenda</a>
@endsection
