@extends('layouts.fondo')

@section('content')
    <div class="container">

        <div class="col-sm-12 col-md-6">
            <div class="weather-container">
                <div class="weather-info">
                    <h2>{{ $weatherData['currentDay'] }}</h2>
                    <img src="{{ $weatherData['weatherIcon'] }}" alt="Weather Icon">
                    <p class="temperature">{{ $weatherData['temperature'] }} °C</p>
                </div>
                <div class="weather-date">
                    <p>{{ $weatherData['currentDate'] }}</p>
                </div>
            </div>
        </div>

        




        <div class="row">
          <div class="col-md-4 col-sm-12 mb-3">
              <a href="{{ route('hospedajes.show', 1) }}" class="image-button">
                  <img src="{{ asset('imagenes/mallorca1.jpg') }}" alt="Mallorca 1">
                  <h5>Primer título</h5>
              </a>
          </div>
          <div class="col-md-4 col-sm-12 mb-3">
              <a href="{{ route('hospedajes.show', 2) }}" class="image-button">
                  <img src="{{ asset('imagenes/mallorca2.jpg') }}" alt="Mallorca 2">
                  <h5>Segundo título</h5>
              </a>
          </div>
          <div class="col-md-4 col-sm-12 mb-3">
              <a href="{{ route('hospedajes.show', 3) }}" class="image-button">
                  <img src="{{ asset('imagenes/mallorca3.jpg') }}" alt="Mallorca 3">
                  <h5>Tercer título</h5>
              </a>
          </div>
      </div>



















        <div class="row justify-content-center align-items-center min-vh-100">
            
            <div class="col-sm-12 col-md-6">
                
                <div class="d-flex flex-column align-items-center">
                    <!-- Enlace a la vista de hospedajes -->
                    <a href="{{ route('hospedajes.show', 1) }}" class="btn btn-primary mb-3">Ver Hospedajes</a>
                    
                    <!-- Enlace a la vista de agenda -->
                    <a href="{{ route('agenda.index') }}" class="btn btn-primary">Ver Agenda</a>
                    
                    @auth
                        <!-- Enlace para crear evento de hospedaje -->
                        <a href="{{ route('hospedajes.create') }}" class="btn btn-primary mt-3">Crear Evento de Hospedaje</a>
                        
                        <!-- Enlace para crear evento en la agenda -->
                        <a href="{{ route('agenda.create') }}" class="btn btn-primary">Crear Evento en Agenda</a>
                    @endauth

                    @guest
                        <!-- Enlace para registro -->
                        <a href="{{ route('register') }}" class="btn btn-primary mt-3">Registrarse</a>

                        <!-- Enlace para inicio de sesión -->
                        <a href="{{ route('login') }}" class="btn btn-primary">Iniciar sesión</a>
                    @endguest
                </div>
            </div>
            
        </div>
    </div>
@endsection

