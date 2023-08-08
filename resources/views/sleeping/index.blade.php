@extends('layouts.hotel_description_fondo')

@section('content')
    @include('navbar')
    <div class="container mx-auto px-4">
        @if ($sleepingItems->isEmpty())
            <p class="text-center text-2xl py-4 text-white">Still nowhere to sleep</p>
        @else
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                @foreach ($sleepingItems as $sleeping)
                    <div class="bg-gray-800 p-4 rounded-lg mb-4">
                        <p class="text-white">ID: {{ $sleeping->id }}</p>
                        <p class="text-white">Name: {{ $sleeping->name }}</p>
                        <p class="text-white">Location: {{ $sleeping->location }}</p>
                        <p class="text-white">Check-in: {{ $sleeping->check_in }}</p>
                        <p class="text-white">Check-out: {{ $sleeping->check_out }}</p>
                        <p class="text-white">Stars: {{ $sleeping->stars }}</p>
                        <p class="text-white">Description: {{ $sleeping->description }}</p>
                        @if ($sleeping->photo)
                            <div class="flex justify-center">
                                <img src="{{ Storage::url($sleeping->photo) }}" alt="Sleeping Photo"
                                    class="max-h-32 w-auto max-w-1/2">
                            </div>
                        @endif
                        <div class="mt-4 flex justify-center">
                            <a href="{{ route('sleepings.edit', $sleeping->id) }}" class="text-blue-500 mr-2">Edit</a>
                            <form action="{{ route('sleepings.destroy', $sleeping->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500">Delete</button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
@endsection
