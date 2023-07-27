@extends('layouts.hotel_description_fondo')

@section('content')
    @include('navbar')
    <div class="container mx-auto px-4 lg:w-3/4 xl:w-2/4"> <!-- Centrar y ajustar el ancho del formulario -->
        <img src="{{ asset('imagenes/plan.png') }}" alt="Plan" class="img-fluid mx-auto d-block">
        <h1 class="text-center text-4xl py-4 pb-8">Let's make a plan</h1>

        <form action="{{ route('agenda.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group flex flex-col">
                <label for="titulo" class="block text-white font-medium text-sm mb-2">Title of the plan</label>
                <input type="text" name="titulo" id="titulo"
                    class="border border-blue-200 rounded-lg p-4 w-full h-7 font-medium text-base bg-transparent focus:outline-none text-white"
                    required>
            </div>

            <div class="form-group flex flex-col">
                <label for="categoria" class="block text-white font-medium text-sm mb-2">Category</label>
                <div class="relative">
                    <span class="absolute left-3 top-2 text-white pointer-events-none">Beach / Foody / Shopping /
                        Visiting</span>
                    <select name="categoria" id="categoria"
                        class="border border-blue-200 rounded-lg p-4 w-full h-7 font-medium text-base bg-transparent focus:outline-none text-white focus:bg-sky-200  focus:ring-1 focus:ring-blue-500 focus:border-blue-500 focus:rounded-lg">
                        <option></option>
                        <option value="Beach">Beach</option>
                        <option value="Foody">Foody</option>
                        <option value="Visiting">Visiting</option>
                        <option value="Shopping">Shopping</option>
                    </select>
                </div>
            </div>

            <div class="form-group flex flex-col">
                <label for="titulo" class="block text-white font-medium text-sm mb-2">Select date</label>
                <div class="relative">
                    <input type="date" name="fecha" id="fecha"
                        class="border border-blue-200 rounded-lg p-4 w-full h-7 font-medium text-base bg-transparent focus:outline-none text-white focus:bg-sky-200 focus:ring-1 focus:ring-blue-500 focus:border-blue-500 focus:rounded-lg">
                </div>
            </div>

            <div class="form-group flex flex-col mb-4">
                <label for="hora_inicio" class="block text-white font-medium text-sm mb-2">Starting time:</label>
                <div class="relative">
                    <input type="time" name="hora_inicio" id="hora_inicio"
                        class="border border-blue-200 rounded-lg p-4 w-full h-7 font-medium text-base bg-transparent focus:outline-none text-white focus:bg-sky-200 focus:ring-1 focus:ring-blue-500 focus:border-blue-500 focus:rounded-lg"
                        required>
                </div>
            </div>

            <div class="form-group flex flex-col mb-4">
                <label for="hora_fin" class="block text-white font-medium text-sm mb-2">Ending time:</label>
                <div class="relative">
                    <input type="time" name="hora_fin" id="hora_fin"
                        class="border border-blue-200 rounded-lg p-4 w-full h-7 font-medium text-base bg-transparent focus:outline-none text-white focus:bg-sky-200 focus:ring-1 focus:ring-blue-500 focus:border-blue-500 focus:rounded-lg">
                </div>
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

            <div class="form-group flex flex-col mb-4">
                <label for="descripcion" class="block text-white font-medium text-sm mb-2">Description:</label>
                <textarea name="descripcion" id="descripcion" rows="4"
                    class="border border-blue-200 rounded-lg p-4 w-full font-medium text-base bg-transparent focus:outline-none text-white focus:bg-sky-200 focus:ring-1 focus:ring-blue-500 focus:border-blue-500 focus:rounded-lg"></textarea>
            </div>

            <div class="form-group flex flex-col md:flex-row justify-center items-center gap-4 mb-4">
                <button type="submit" class="flex-1 bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 rounded-md button-primary">Create plan</button>
                <a href="{{ route('agenda.index') }}" class="flex-1 bg-gray-500 hover:bg-gray-600 text-white font-semibold py-2 rounded-md button-secondary text-center">Back</a>
            </div>
            
            
            
            
            
            
            
            
            
            
        </form>
    </div>
@endsection
