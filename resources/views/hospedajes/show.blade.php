@extends('layouts.hotel_description_fondo')



@section('content')
    <div class="container">
        <h1 class="text-baskerville text-3xl md:text-5xl text-white">{{ $hospedaje->nombre }}</h1>
        <div class="flex items-center mt-2">
            @for ($i = 0; $i < $hospedaje->stars; $i++)
                <img src="{{ asset('imagenes/icon _star.png') }}"alt="Estrella" class="w-4 h-4">
            @endfor
        </div>
        <div class="flex items-center mt-4">
            <svg class="w-4 h-4 mr-2 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path
                    d="M12 2a10 10 0 0 0-10 10c0 5.523 4.477 10 10 10s10-4.477 10-10A10 10 0 0 0 12 2zm0 18.555c-4.079 0-7.402-3.323-7.402-7.402 0-3.48 3.153-9.498 7.402-15.153 4.249 5.655 7.402 11.673 7.402 15.153 0 4.08-3.323 7.402-7.402 7.402z" />
                <circle cx="12" cy="12" r="2" />
            </svg>
            <p class="text-blinker font-bold text-sm md:text-base text-white">{{ $hospedaje->ubicacion }}</p>
        </div>
        <p class="mt-4 text-white"><strong>CHECK IN:</strong> <span
                class="font-bold">{{ $hospedaje->check_in }}</span></p>
        <p class="text-white"><strong>CHECK OUT:</strong> <span
                class="font-bold">{{ $hospedaje->check_out }}</span></p>
        <p class="text-white"><strong>ROOM Number:</strong> <span class="font-bold">123</span></p>
        <p class="mt-4 text-blinker text-sm md:text-base text-white">{{ $hospedaje->descripcion }}</p>
    </div>
@endsection
