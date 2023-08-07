@extends('layouts.hotel_description_fondo')

@section('content')
@include('navbar')
<div class="container mx-auto px-4 lg:w-3/4 xl:w-2/4">
    <img src="{{ asset('imagenes/hotel.png') }}" alt="Plan" class="img-fluid mx-auto d-block max-w-[2/3]">
    <h1 class="text-center text-4xl py-4">Where would you be spending the night ?</h1>

    <form action="{{ route('hospedajes.store') }}" method="POST" enctype="multipart/form-data"
        class="flex flex-col gap-4">
        @csrf

        <div class="form-group">
            <label for="nombre">Name</label>
            <input type="text" id="nombre" name="nombre" maxlength="30"
                class="border border-blue-200 rounded-lg p-4 w-full h-7 font-medium text-base bg-transparent focus:outline-none text-white"
                required>
        </div>

        <div class="form-group">
            <label for="ubicacion">Location</label>
            <input type="text" id="ubicacion" name="ubicacion" maxlength="30"
                class="border border-blue-200 rounded-lg p-4 w-full h-7 font-medium text-base bg-transparent focus:outline-none text-white"
                required>
        </div>

        <div class="form-group">
            <label for="check_in">Check-in</label>
            <input type="date" id="check_in" name="check_in"
                class="border border-blue-200 rounded-lg p-4 w-full h-7 font-medium text-base bg-transparent focus:outline-none text-white"
                required>
        </div>

        <div class="form-group">
            <label for="check_out">Check-out</label>
            <input type="date" id="check_out" name="check_out"
                class="border border-blue-200 rounded-lg p-4 w-full h-7 font-medium text-base bg-transparent focus:outline-none text-white"
                required>
        </div>

        <div class="form-group">
            <label for="stars">Stars</label>
            <input type="number" id="stars" name="stars" max="5"
                class="border border-blue-200 rounded-lg p-4 w-full h-7 font-medium text-base bg-transparent focus:outline-none text-white"
                required>
        </div>

        <div class="form-group">
            <label for="descripcion">Description</label>
            <textarea id="descripcion" name="descripcion" maxlength="500"
                class="border border-blue-200 rounded-lg p-4 w-full font-medium text-base bg-transparent focus:outline-none text-white"></textarea>
        </div>

        <div class="form-group flex flex-col mb-4">
            <div class="relative w-full mb-4">
                <input type="file" name="imagen" id="imagen"
                    class="border border-blue-200 rounded-lg p-4 w-full h-7 font-medium text-base bg-transparent focus:outline-none text-white focus:bg-sky-200 focus:ring-1 focus:ring-blue-500 focus:border-blue-500 focus:rounded-lg hidden"
                    accept="image/*">
                <label for="imagen"
                    class="flex items-center justify-center absolute left-0 top-0 w-full h-full border border-white rounded-lg p-4 font-medium text-base bg-transparent focus:outline-none text-white">
                    <span class="text-white">Add Image</span>
                </label>
            </div>
        </div>
        

        <div class="text-center form-group flex flex-col md:flex-row justify-center items-center gap-4 mb-4">
            <button type="submit"
                class="flex-1 bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 rounded-md button-primary">Save</button>
            <a href="{{ route('hospedajes.index') }}"
                class="flex-1 bg-gray-500 hover:bg-gray-600 text-white font-semibold py-2 rounded-md button-secondary text-center">Back</a>
        </div>
    </form>
</div>
@endsection
