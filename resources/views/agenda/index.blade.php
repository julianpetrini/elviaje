@extends('layouts.hotel_description_fondo')
@include('navbar_weather')

@section('content')

    <div class="contenedor-agenda">

        @if ($actividades->isEmpty())
            <p class="text-center text-2xl py-4 text-white">Still no plan, why don't start planning your holidays?</p>
            <div class="text-center mt-6">
                <a href="{{ route('agenda.create') }}"
                    class="inline-block px-4 py-2 bg-sky-500 hover:bg-sky-700 text-white rounded-md">Create new plan</a>
            </div>
        @else
            <div class="pt-3">
                <a href="{{ url('/') }}"
                    class="inline-block bg-blue-500 hover:bg-blue-600 text-white font-semibold px-4 py-2 rounded-lg ">Back</a>
            </div>
            <!-- Carrusel con la actividad más próxima -->
            <div id="carousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    @php
                        $actividadProxima = $actividades->first();
                    @endphp
                    @foreach ($actividades as $actividad)
                        <div class="carousel-item{{ $actividad->id == $actividadProxima->id ? ' active' : '' }}">
                            <img src="{{ asset($actividad->imagen) }}" alt="{{ $actividad->titulo }}"
                                class="carousel-image">
                            <h3 class="text-xl font-semibold">{{ $actividad->titulo }}</h3>
                            <p>{{ $actividad->descripcion }}</p>
                        </div>
                    @endforeach
                </div>
            </div>

            <form action="{{ route('agenda.index') }}" method="GET">
                <div class="mb-4">
                    <label for="categoria" class="mr-2">Filter by category:</label>
                    <select name="categoria" id="categoria"
                        class="border border-gray-300 rounded-md p-1 bg-gray-100 text-black">
                        <option value="">All</option>
                        <option value="Beach" {{ request('categoria') == 'Beach' ? 'selected' : '' }}>Beach</option>
                        <option value="Foody" {{ request('categoria') == 'Foody' ? 'selected' : '' }}>Foody</option>
                        <option value="Visiting" {{ request('categoria') == 'Visiting' ? 'selected' : '' }}>Visiting
                        </option>
                        <option value="Shopping" {{ request('categoria') == 'Shopping' ? 'selected' : '' }}>Shopping
                        </option>
                    </select>
                    <button type="submit"
                        class="bg-blue-500 hover:bg-blue-600 text-white font-semibold px-4 py-2 rounded-md ml-2">Filter</button>
                </div>
            </form>

            @foreach ($actividades->groupBy('fecha')->sortKeys() as $fecha => $actividadesDia)
                @foreach ($actividadesDia->sortBy('hora_inicio') as $actividad)
                    <a href="{{ route('agenda.show', ['agenda' => $actividad->id]) }}"
                        class="block mb-6 p-4 bg-blue-500 bg-opacity-25 rounded-lg">
                        @php
                            $fechaTitulo = Carbon\Carbon::parse($fecha)
                                ->locale('en')
                                ->isoFormat('dddd DD.MM');
                        @endphp
                        <h2 class="text-2xl font-semibold text-white mb-2">{{ $fechaTitulo }}</h2>
                        <p class="mb-1"><strong class="text-white">Starting time:</strong>
                            {{ substr($actividad->hora_inicio, 0, 5) }}</p>
                        <p class="mb-4"><strong class="text-white">Plan:</strong> {{ $actividad->titulo }}</p>
                    </a>
                @endforeach
            @endforeach

            <a href="{{ route('agenda.create') }}" class="bg-green-500 text-white px-4 py-2 rounded-md">Create new plan</a>
        @endif
    </div>
@endsection
