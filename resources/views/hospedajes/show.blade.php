@extends('layouts.fondo')

@section('content')
    <div class="container">
        <h1>{{ $hospedaje->nombre }}</h1>
        <p><strong>Ubicación:</strong> {{ $hospedaje->ubicacion }}</p>
        <p><strong>Check-in:</strong> {{ $hospedaje->check_in }}</p>
        <p><strong>Check-out:</strong> {{ $hospedaje->check_out }}</p>
        <p><strong>Estrellas:</strong> {{ $hospedaje->stars }}</p>
        <p><strong>Descripción:</strong> {{ $hospedaje->descripcion }}</p>
        @if ($hospedaje->foto)
            <img src="{{ Storage::url($hospedaje->foto) }}" alt="Foto Hospedaje">
        @endif
    </div>
@endsection
