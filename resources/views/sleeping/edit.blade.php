@extends('layouts.hotel_description_fondo')

@section('content')
@include('navbar')
<div class="container mx-auto px-4 lg:w-3/4 xl:w-2/4">
    <img src="{{ asset('imagenes/hotel.png') }}" alt="Plan" class="img-fluid mx-auto d-block max-w-[2/3]">
    <h1 class="text-center text-4xl py-4">Let's make some changes</h1>

    <form action="{{ route('sleepings.update', $sleeping->id) }}" method="POST" enctype="multipart/form-data"
        class="flex flex-col gap-4">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" value="{{ $sleeping->name }}"
                class="border border-blue-200 rounded-lg p-4 w-full h-7 font-medium text-base bg-transparent focus:outline-none text-white"
                required>
        </div>

        <div class="form-group">
            <label for="location">Location</label>
            <input type="text" id="location" name="location" value="{{ $sleeping->location }}"
                class="border border-blue-200 rounded-lg p-4 w-full h-7 font-medium text-base bg-transparent focus:outline-none text-white"
                required>
        </div>

        <div class="form-group">
            <label for="check_in">Check-in</label>
            <input type="date" id="check_in" name="check_in" value="{{ $sleeping->check_in }}"
                class="border border-blue-200 rounded-lg p-4 w-full h-7 font-medium text-base bg-transparent focus:outline-none text-white"
                required>
        </div>

        <div class="form-group">
            <label for="check_out">Check-out</label>
            <input type="date" id="check_out" name="check_out" value="{{ $sleeping->check_out }}"
                class="border border-blue-200 rounded-lg p-4 w-full h-7 font-medium text-base bg-transparent focus:outline-none text-white"
                required>
        </div>

        <div class="form-group">
            <label for="stars">Stars</label>
            <input type="number" id="stars" name="stars" max="5" value="{{ $sleeping->stars }}"
                class="border border-blue-200 rounded-lg p-4 w-full h-7 font-medium text-base bg-transparent focus:outline-none text-white"
                required>
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea id="description" name="description" maxlength="500"
                class="border border-blue-200 rounded-lg p-4 w-full font-medium text-base bg-transparent focus:outline-none text-white">{{ $sleeping->description }}</textarea>
        </div>

        <div class="form-group flex flex-col mb-4">
            <div class="relative w-full mb-4">
                <input type="file" name="photo" id="photo"
                    class="border border-blue-200 rounded-lg p-4 w-full h-7 font-medium text-base bg-transparent focus:outline-none text-white focus:bg-sky-200 focus:ring-1 focus:ring-blue-500 focus:border-blue-500 focus:rounded-lg hidden"
                    accept="image/*">
                <label for="photo"
                    class="flex items-center justify-center absolute left-0 top-0 w-full h-full border border-white rounded-lg p-4 font-medium text-base bg-transparent focus:outline-none text-white">
                    <span class="text-white">Change Photo</span>
                </label>
            </div>
        </div>

        <div class="text-center form-group flex flex-col md:flex-row justify-center items-center gap-4 mb-4">
            <button type="submit"
                class="flex-1 bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 rounded-md button-primary">Save</button>
            <a href="{{ route('sleeping.index') }}"
                class="flex-1 bg-gray-500 hover:bg-gray-600 text-white font-semibold py-2 rounded-md button-secondary text-center">Back</a>
        </div>
    </form>
</div>
@endsection
