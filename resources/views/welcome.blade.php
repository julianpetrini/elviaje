@extends('layouts.hotel_description_fondo')
@include('navbar_weather')

@section('content')

    <div class="container-title-box">
        <h1 class="welcome-title text-center">Welcome to Mallorca</h1>
        <p class="lead text-center">
            Here you can create personalized itineraries, manage your accommodations, leave reviews, and so much more.
            Explore the beauty of Mallorca while effortlessly organizing your trip from start to finish.
        </p>
    </div>
    

    <!--Vamos a probar con las tarjetas bootstrap-->
    <div class="container-menu">
        <a href="{{ route('agenda.index') }}" class="btn-primary">
            <div class="container-card-welcome">
                <div class="agenda-card-img ">

                    <h5 class="card-title text-white text-center ">AGENDA</h5>

                </div>
            </div>
        </a>
        <a href="{{ route('sleeping.index') }}" class="btn-primary">
            <div class="container-card-welcome">
                <div class="hotel-card-img ">
                    <h5 class="card-title text-white text-center ">HOTEL</h5>

                </div>
            </div>
        </a>
        @guest

            <a href="{{ route('login') }}" class="btn-primary">
                <div class="container-card-welcome">
                    <div class="agenda-card-img ">
                        <h5 class="card-title text-white text-center ">LOG IN</h5>

                    </div>
                </div>
            </a>
            <a href="{{ route('register') }}" class="btn-primary">
                <div class="container-card-welcome">
                    <div class="hotel-card-img ">
                        <h5 class="card-title text-white text-center ">REGISTER</h5>

                    </div>
                </div>
            </a>
        @endguest
        @auth
            <a href="{{ route('agenda.create') }}" class="btn-primary">
                <div class="container-card-welcome">
                    <div class="agenda-card-img ">
                        <h5 class="card-title text-white text-center ">CREATE A PLAN</h5>

                    </div>
                </div>
            </a>
            <a href="{{ route('sleeping.create') }}" class="btn-primary">
                <div class="container-card-welcome">
                    <div class="hotel-card-img ">
                        <h5 class="card-title text-white text-center ">ADD WHERE YOU ARE SLEEPING</h5>

                    </div>
                </div>
            </a>

        @endauth

    </div>

    <div class="container-title-box">
        <h1 class="welcome-title text-center">Lovsi Reisen</h1>
        <p class="lead text-center">Whether you're planning a relaxing getaway or an exciting adventure, we've got you
            covered. Explore the beauty of Mallorca while effortlessly organizing your trip from start to finish </p>
    </div>
    

    @include('footer')
@endsection
