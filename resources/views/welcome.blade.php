@extends('layouts.hotel_description_fondo')
@include('navbar_weather')

@section('content')
    <!-- Desktop con simulacion de simulando mobile -->
    <div class="desktop-mobile-container">


        <div class="mid-container-desktop">
            <div class="container-text p-5">
                <h1 class="display-1"> Lovsi App</h1>
                <h2 class="display-6">Welcome to</h2>
                <p class="lead">A Web application prototype that empowers users to design and share their
                    journeys. With Lovsi, you can invite your travel companions, collectively plan itineraries,
                    accommodations, and later discuss plans, post comments, and share photos. Embark on the discovery!
                    Designed with a mobile-first approach </p>
            </div>


            <div class="centrar-mobile-desktop">

                <img src="{{ asset('imagenes/mobile.png') }}" alt="Mobile Device" class="mobile-device-img">
                <div class="phone-container" id="phone">
                    <div class="phone-content">
                        <div class="background-index">
                            <div class="circle"></div>
                            <div class="hexagon"></div>
                            <!--
                                <div class="container-title-box">
                                    <h1 class="display-6 text-center">Lovsi Reisen</h1>
                                    <p class="fs-6 text-center">
                                        Here you can create personalized itineraries, manage your accommodations, leave reviews,
                                        and so much more.
                                    </p>
                                </div>
                            -->

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

                                    <div class="container-title-box">
                                        <h1 class="welcome-title text-center">Lovsi Reisen</h1>
                                        <p class="lead text-center">Whether you're planning a relaxing getaway or an exciting
                                            adventure, we've got you
                                            covered. Explore the beauty of Mallorca while effortlessly organizing your trip from
                                            start to finish </p>
                                    </div>
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

                                    <div class="container-title-box">
                                        <h1 class="welcome-title text-center">Lovsi Reisen</h1>
                                        <p class="lead text-center">Whether you're planning a relaxing getaway or an exciting
                                            adventure, we've got you
                                            covered. Explore the beauty of Mallorca while effortlessly organizing your trip from
                                            start to finish </p>
                                    </div>

                                @endauth

                            </div>



                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


    @include('footer')
@endsection
