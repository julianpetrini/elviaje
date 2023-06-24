@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Log in') }}</div>

                    <div class="card-body">
                        <x-guest-layout>
                            <!-- Contenido del formulario de inicio de sesión -->
                        </x-guest-layout>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
