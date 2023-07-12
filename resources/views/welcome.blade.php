@extends('layouts.hotel_description_fondo')
@include('navbar_weather')

@section('content')
    <div class="container pt-4">
        <!--
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
                                        <div class="image-button-inner">
                                            <h5>Primer título</h5>
                                        </div>
                                        <img src="{{ asset('imagenes/mallorca1.jpg') }}" alt="Mallorca 1">
                                    </a>
                                </div>
                                <div class="col-md-4 col-sm-12 mb-3">
                                    <a href="{{ route('hospedajes.show', 2) }}" class="image-button">
                                        <div class="image-button-inner">
                                            <h5>Segundo título</h5>
                                        </div>
                                        <img src="{{ asset('imagenes/mallorca2.jpg') }}" alt="Mallorca 2">
                                    </a>
                                </div>
                                <div class="col-md-4 col-sm-12 mb-3">
                                    <a href="{{ route('hospedajes.show', 3) }}" class="image-button">
                                        <div class="image-button-inner">
                                            <h5>Tercer título</h5>
                                        </div>
                                        <img src="{{ asset('imagenes/mallorca3.jpg') }}" alt="Mallorca 3">
                                    </a>
                                </div>
                            </div>


                        
        <div class="flex flex-wrap ">
            <div class="max-w-sm bg-transparent z-50">
                <!--

                            <a href="{{ route('hospedajes.show', 1) }}" class="btn-primary">
                                <img class="rounded-lg" src="{{ asset('imagenes/mallorca1.jpg') }}" alt="" />
                            </a>
                          
                <div class="p-5">
                    <a href="{{ route('hospedajes.show', 1) }}" class="btn-primary">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-white dark:text-white">Where to stay</h5>
                    </a>
                    <p class="mb-3 font-normal text-white dark:text-gray-400">Here you will find the details</p>
                    <a href="{{ route('hospedajes.show', 1) }}"
                        class="inline-flex items-center mr-2 px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Read more
                        <img src="{{ asset('imagenes/location.png') }}" alt="Ubicación" class="w-5 h-6 ml-2">
                    </a>

                </div>
            </div>
        -->

            <div class="cardwelcome max-w-sm z-50 rounded drop-shadow-xl">
              <div class="p-5 flex flex-col items-center justify-center ">
                <a href="{{ route('hospedajes.show', 1) }}" class="btn-primary">
                  <h5 class="mb-2 text-2xl font-bold tracking-tight text-white dark:text-white">HOTEL</h5>
                </a>
                <p class="mb-3 font-normal text-white dark:text-gray-400">Here you will find the details</p>
                <!--<a href="{{ route('hospedajes.show', 1) }}" class="inline-flex items-center mr-2 px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                  view details
                  <img src="{{ asset('imagenes/location.png') }}" alt="Ubicación" class="w-5 h-6 ml-2">
                </a>-->
              </div>
            </div>
          </div>
          



            <div class="max-w-sm bg-transparent z-50">
                <!--

                        <a href="{{ route('hospedajes.show', 1) }}" class="btn-primary">
                            <img class="rounded-lg" src="{{ asset('imagenes/mallorca1.jpg') }}" alt="" />
                        </a>
                        -->
                <div class="p-5 ">
                    <a href="{{ route('agenda.index') }}"class="btn-primary">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-white dark:text-white">Agenda</h5>
                    </a>
                    <p class="mb-3 font-normal text-white dark:text-gray-400">New plan?</p>
                    <a href="{{ route('agenda.index') }}"
                        class="inline-flex items-center mr-2 px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Read more
                        <img src="{{ asset('imagenes/location.png') }}" alt="Ubicación" class="w-5 h-6 ml-2">
                    </a>

                </div>
            </div>
            @guest
                <div class="max-w-sm bg-transparent z-50">
                    <!--

                                <a href="{{ route('hospedajes.show', 1) }}" class="btn-primary">
                                    <img class="rounded-lg" src="{{ asset('imagenes/mallorca1.jpg') }}" alt="" />
                                </a>
                                -->
                    <div class="p-5">
                        <a href="{{ route('hospedajes.show', 1) }}" class="btn-primary">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-white dark:text-white">Sign in</h5>
                        </a>
                        <p class="mb-3 font-normal text-white dark:text-gray-400">Are you already an user?</p>
                        <a href="{{ route('hospedajes.show', 1) }}"
                            class="inline-flex items-center mr-2 px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Read more
                            <img src="{{ asset('imagenes/location.png') }}" alt="Ubicación" class="w-5 h-6 ml-2">
                        </a>

                    </div>
                </div>

                <div class="max-w-sm bg-transparent z-50">
                    <!--

                                <a href="{{ route('hospedajes.show', 1) }}" class="btn-primary">
                                    <img class="rounded-lg" src="{{ asset('imagenes/mallorca1.jpg') }}" alt="" />
                                </a>
                                -->
                    <div class="p-5">
                        <a href="{{ route('hospedajes.show', 1) }}" class="btn-primary">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-white dark:text-white">Register</h5>
                        </a>
                        <p class="mb-3 font-normal text-white dark:text-gray-400">And start the journey</p>
                        <a href="{{ route('hospedajes.show', 1) }}"
                            class="inline-flex items-center mr-2 px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Read more
                            <img src="{{ asset('imagenes/location.png') }}" alt="Ubicación" class="w-5 h-6 ml-2">
                        </a>

                    </div>
                </div>
            @endguest
        </div>







        <!--
                <div class="flex justify-center items-center min-h-screen">
                    <div class="bg-black bg-opacity-50 rounded-lg shadow-lg p-8 grid gap-4 w-1/2 md:w-1/3">
                        <div class="flex items-center">
                            <img src="{{ asset('imagenes/mallorca1.jpg') }}" alt="Imagen 1" class="w-10 h-10 mr-2">
                            <a href="{{ route('hospedajes.show', 1) }}" class="btn-primary">Ver Hospedajes</a>
                        </div>

                        <div class="flex items-center">
                            <img src="{{ asset('imagenes/mallorca1.jpg') }}" alt="Imagen 2" class="w-10 h-10 mr-2">
                            <a href="{{ route('agenda.index') }}" class="btn-primary">Ver Agenda</a>
                        </div>

                        @auth
                                    <div class="flex items-center">
                                        <img src="{{ asset('imagenes/mallorca1.jpg') }}" alt="Imagen 3" class="w-10 h-10 mr-2">
                                        <a href="{{ route('hospedajes.create') }}" class="btn-primary">Crear Evento de Hospedaje</a>
                                    </div>

                                    <div class="flex items-center">
                                        <img src="{{ asset('imagenes/imagen_4.jpg') }}" alt="Imagen 4" class="w-10 h-10 mr-2">
                                        <a href="{{ route('agenda.create') }}" class="btn-primary">Crear Evento en Agenda</a>
                                    </div>
                        @endauth






                        

                        @guest
                                    <div class="flex items-center">
                                        <img src="{{ asset('imagenes/mallorca1.jpg') }}" alt="Imagen 5" class="w-10 h-10 mr-2">
                                        <a href="{{ route('register') }}" class="btn-primary">Registrarse</a>
                                    </div>

                                    <div class="flex items-center">
                                        <img src="{{ asset('imagenes/mallorca1.jpg') }}" alt="Imagen 6" class="w-10 h-10 mr-2">
                                        <a href="{{ route('login') }}" class="btn-primary">Iniciar sesión</a>
                                    </div>
                        @endguest
                    </div>-->
    </div>
@endsection
