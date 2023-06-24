<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                    <h2>soon you will be able to track your activity</h2>
                    <div class="mt-4">
                        <a href="{{ route('welcome') }}" class="btn btn-primary">Go to Welcome</a><br>
                        <a href="{{ route('agenda.index') }}" class="btn btn-primary">Go to Agenda</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

