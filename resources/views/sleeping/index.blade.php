@extends('layouts.hotel_description_fondo')

@section('content')
@include('navbar')
<div class="container mx-auto px-4 lg:w-3/4 xl:w-2/4">
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Location</th>
                <th>Check-in</th>
                <th>Check-out</th>
                <th>Stars</th>
                <th>Description</th>
                <th>Photo</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($sleepingItems as $sleeping)
            <tr>
                <td>{{ $sleeping->id }}</td>
                <td>{{ $sleeping->name }}</td>
                <td>{{ $sleeping->location }}</td>
                <td>{{ $sleeping->check_in }}</td>
                <td>{{ $sleeping->check_out }}</td>
                <td>{{ $sleeping->stars }}</td>
                <td>{{ $sleeping->description }}</td>
                <td>
                    @if ($sleeping->photo)
                        <img src="{{ Storage::url($sleeping->photo) }}" alt="Sleeping Photo">
                    @endif
                </td>
                <td>
                    <a href="{{ route('sleepings.edit', $sleeping->id) }}" class="text-blue-500">Edit</a>
                    <form action="{{ route('sleepings.destroy', $sleeping->id) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-500">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
