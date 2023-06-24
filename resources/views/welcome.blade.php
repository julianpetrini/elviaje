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

        





        <div id="carouselExampleCaptions" class="carousel slide carousel-fade">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="{{ asset('imagenes/mallorca1.jpg') }}" class="d-block w-100" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                  <h5>First slide label</h5>
                  <p>Some representative placeholder content for the first slide.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="{{ asset('imagenes/mallorca2.jpg') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Second slide label</h5>
                  <p>Some representative placeholder content for the second slide.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="{{ asset('imagenes/mallorca3.jpg') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Third slide label</h5>
                  <p>Some representative placeholder content for the third slide.</p>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
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

