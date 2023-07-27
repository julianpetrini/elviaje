@extends('layouts.hotel_description_fondo')
@include('navbar_weather')

@section('content')
    <div class="container pt-5">
        <div class="flex flex-wrap">
            <div class="w-full md:w-1/2 px-4 mb-4">

                <div
                    class="flex justify-center items-center cardwelcome hotel_w_img aspect-w-1 aspect-h-1 max-w-sm z-50 rounded-lg shadow-xl">
                    <a href="{{ route('hospedajes.show', 1) }}" class="btn-primary">
                        <div class="p-5 flex flex-col items-center">
                            <p
                                class="text-center mb-2 text-2xl font-bold tracking-tight text-white dark:text-white text-link">
                                HOTEL</p>
                            <p class="mb-3 font-normal text-white dark:text-gray-400 text-center text-link">Here you will
                                find the details</p>
                        </div>
                    </a>
                </div>

            </div>

            <div class="w-full md:w-1/2 px-4 mb-4">

                <div
                    class="flex justify-center items-center cardwelcome agenda_w_img aspect-w-1 aspect-h-1 max-w-sm z-50 rounded-lg shadow-xl">
                    <a href="{{ route('agenda.index') }}" class="btn-primary">
                        <div class="p-5 flex flex-col items-center">
                            <p
                                class="text-center mb-2 text-2xl font-bold tracking-tight text-white dark:text-white text-link">
                                AGENDA</p>
                            <p class="mb-3 font-normal text-white dark:text-gray-400 text-center">plans?</p>
                        </div>
                    </a>
                </div>

            </div>

            @guest
                <div class="w-full md:w-1/2 px-4 mb-4">

                    <div
                        class="flex justify-center items-center cardwelcome register_w_img aspect-w-1 aspect-h-1 max-w-sm z-50 rounded-lg shadow-xl">

                        <a href="{{ route('register') }}" class="btn-primary">
                            <div class="p-5 flex flex-col items-center">
                                <p
                                    class="text-center mb-2 text-2xl font-bold tracking-tight text-white dark:text-white text-link">
                                    REGISTER</p>
                                <p class="mb-3 font-normal text-white dark:text-gray-400 text-center">and be able to create your
                                    trip</p>
                            </div>
                        </a>
                    </div>

                </div>

                <div class="w-full md:w-1/2 px-4 mb-4">

                    <div
                        class="flex justify-center items-center cardwelcome log_w_img aspect-w-1 aspect-h-1 max-w-sm z-50 rounded-lg shadow-xl">
                        <a href="{{ route('login') }}" class="btn-primary">
                            <div class="p-5 flex flex-col items-center">
                                <p
                                    class="text-center mb-2 text-2xl font-bold tracking-tight text-white dark:text-white text-link">
                                    SIGN IN</p>
                                <p class="mb-3 font-normal text-white dark:text-gray-400 text-center">already a user?</p>
                            </div>
                        </a>
                    </div>

                </div>
            @endguest


            @auth

                <div class="w-full md:w-1/2 px-4 mb-4">

                    <div
                        class="flex justify-center items-center cardwelcome hotel_w_img aspect-w-1 aspect-h-1 max-w-sm z-50 rounded-lg shadow-xl">
                        <a href="{{ route('agenda.create') }}" class="btn-primary">
                            <div class="p-5 flex flex-col items-center">
                                <p
                                    class="text-center mb-2 text-2xl font-bold tracking-tight text-white dark:text-white text-link">
                                    Create a plan</p>
                                <p class="mb-3 font-normal text-white dark:text-gray-400 text-center text-link">add a new plan
                                    to your trip</p>
                            </div>
                        </a>
                    </div>

                </div>

                <div class="w-full md:w-1/2 px-4 mb-4">

                    <div
                        class="flex justify-center items-center cardwelcome hotel_w_img aspect-w-1 aspect-h-1 max-w-sm z-50 rounded-lg shadow-xl">
                        <a href="{{ route('hospedajes.create') }}" class="btn-primary">
                            <div class="p-5 flex flex-col items-center">
                                <p
                                    class="text-center mb-2 text-2xl font-bold tracking-tight text-white dark:text-white text-link">
                                    Add a Hotel</p>
                                <p class="mb-3 font-normal text-white dark:text-gray-400 text-center text-link">add a new place
                                    to sleep</p>
                            </div>
                        </a>
                    </div>

                </div>

            @endauth
        </div>
   
    @endsection
    