@extends('layouts.hotel_description_fondo')

@section('content')
@include('navbar')
<div class="container mx-auto px-4 lg:w-3/4 xl:w-2/4">
    <form action="{{ route('sleepings.update', $sleeping->id) }}" method="POST" enctype="multipart/form-data"
        class="flex flex-col gap-4">
        @csrf
        @method('PUT')

        <!-- Formulario para editar un sleeping -->

        <div class="text-center form-group flex flex-col md:flex-row justify-center items-center gap-4 mb-4">
            <button type="submit"
                class="flex-1 bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 rounded-md button-primary">Save</button>
            <a href="{{ route('sleepings.index') }}"
                class="flex-1 bg-gray-500 hover:bg-gray-600 text-white font-semibold py-2 rounded-md button-secondary text-center">Back</a>
        </div>
    </form>
</div>
@endsection
