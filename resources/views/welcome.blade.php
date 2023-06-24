@extends('layouts.fondo')

@section('content')
    <div class="container">
        <div class="row justify-content-center align-items-center min-vh-100">
            <div class="col-sm-12 col-md-6">
                <div class="d-flex flex-column align-items-center">
                    <!-- Enlace a la vista de hospedajes -->
                    <a href="{{ route('hospedajes.index') }}" class="btn btn-primary mb-3">Ver Hospedajes</a>

                    <!-- Enlace a la vista de agenda -->
                    <a href="{{ route('agenda.index') }}" class="btn btn-primary">Ver Agenda</a>
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
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
            </div>
        </div>
    </div>
@endsection

