@extends('layouts.hotel_description_fondo')



@section('content')
    <div class="container">
        <h1 class="titulo text-baskerville text-3xl md:text-5xl text-white">{{ $hospedaje->nombre }}</h1>
        <div class="flex flex-wrap">
            @for ($i = 0; $i < 5; $i++)
                @if ($i < $hospedaje->stars)
                    <img src="{{ asset('imagenes/icon_star_yellow.png') }}" alt="Estrella" class="w-10 h-10 mr-2">
                @else
                    <img src="{{ asset('imagenes/star_white.png') }}" alt="Estrella" class="w-10 h-10 mr-2">
                @endif
            @endfor
        </div>



        <div class="flex items-center mt-4">
            <img src="{{ asset('imagenes/location.png') }}" alt="Ubicación" class="w-6 h-7 mr-2">
            <p class="mt-4 text-white text-lg font-semibold">{{ $hospedaje->ubicacion }}</p>

        </div>

        <div class="mt-4 text-white flex gap-4">
            <div>
                <p class="text-lg font-semibold">CHECK IN</p>
                <p class="text-lg font-semibold">CHECK OUT</p>
                <p class="text-lg font-semibold">ROOM NUMBER</p>
            </div>
            <div>
                <p><span class="text-lg">{{ date('d.m.y', strtotime($hospedaje->check_in)) }}</span></p>
                <p><span class="text-lg">{{ date('d.m.y', strtotime($hospedaje->check_out)) }}</span></p>
                <p><span class="text-lg">123</span></p>
            </div>
        </div>





        <div class="overflow-hidden h-auto md:h-full">
            <p class="mt-4 text-blinker text-sm md:text-base text-white leading-normal md:leading-relaxed">
                {{ $hospedaje->descripcion }}
            </p>
        </div>
        
    </div>
@endsection
