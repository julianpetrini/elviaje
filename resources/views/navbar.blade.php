<nav x-data="{ open: false }" class="bg-transparent text-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <img class="block h-9 w-auto" src="{{ asset('imagenes/visiting_icon.png') }}" alt="Your Logo">
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <div class="flex items-center">
                        <x-responsive-nav-link :href="route('welcome')" :active="request()->routeIs('welcome')"
                            class="py-2 px-3 text-sm font-medium text-gray-500 hover:text-gray-700 focus:outline-none focus:text-gray-700">
                            {{ __('Home') }}
                        </x-responsive-nav-link>

                        <x-responsive-nav-link :href="route('agenda.index')" :active="request()->routeIs('agenda.index')"
                            class="py-2 px-3 text-sm font-medium text-gray-500 hover:text-gray-700 focus:outline-none focus:text-gray-700">
                            {{ __('Agenda') }}
                        </x-responsive-nav-link>
                    </div>

                    @auth
                        <div class="flex items-center">
                            <x-responsive-nav-link :href="route('agenda.create')" :active="request()->routeIs('agenda.create')"
                                class="py-2 px-3 text-sm font-medium text-gray-500 hover:text-gray-700 focus:outline-none focus:text-gray-700">
                                {{ __('Create Agenda Event') }}
                            </x-responsive-nav-link>

                            <x-responsive-nav-link :href="route('hospedajes.create')" :active="request()->routeIs('hospedajes.create')"
                                class="py-2 px-3 text-sm font-medium text-gray-500 hover:text-gray-700 focus:outline-none focus:text-gray-700">
                                {{ __('Create Hotel') }}
                            </x-responsive-nav-link>
                        </div>
                    @endauth
                </div>

                <!-- Hamburger -->
                <div class="-mr-2 flex items-center sm:hidden">
                    <button @click="open = ! open"
                        class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-900 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-900 focus:text-gray-500 dark:focus:text-gray-400 transition duration-150 ease-in-out">
                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                            <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Responsive Navigation Menu -->
        <div :class="{ 'block': open, 'hidden': !open }" class="hidden sm:hidden">
            <div class="pt-2 pb-3 space-y-1">
                <x-responsive-nav-link :href="route('welcome')" :active="request()->routeIs('welcome')">
                    {{ __('Home') }}
                </x-responsive-nav-link>

                <x-responsive-nav-link :href="route('agenda.index')" :active="request()->routeIs('agenda.index')">
                    {{ __('Agenda') }}
                </x-responsive-nav-link>

                @auth
                    <x-responsive-nav-link :href="route('agenda.create')" :active="request()->routeIs('agenda.create')">
                        {{ __('Create Agenda Event') }}
                    </x-responsive-nav-link>

                    <x-responsive-nav-link :href="route('hospedajes.create')" :active="request()->routeIs('hospedajes.create')">
                        {{ __('Create Hotel') }}
                    </x-responsive-nav-link>
                @endauth
            </div>

            <!-- Responsive Settings Options -->
            <div class="pt-4 pb-1 border-t border-gray-200 dark:border-gray-600">
                <div class="px-4">
                    @auth
                        <div class="font-medium text-base text-gray-800 dark:text-gray-200">{{ Auth::user()->name }}</div>
                        <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                    @endauth
                </div>

                <div class="mt-3 space-y-1">
                    @auth
                        <x-responsive-nav-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-responsive-nav-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-responsive-nav-link :href="route('logout')"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-responsive-nav-link>
                        </form>
                    @else
                        <x-responsive-nav-link :href="route('login')">
                            {{ __('Log In') }}
                        </x-responsive-nav-link>

                        @if (Route::has('register'))
                            <x-responsive-nav-link :href="route('register')">
                                {{ __('Register') }}
                            </x-responsive-nav-link>
                        @endif
                    @endauth
                </div>
            </div>
        </div>
    </div>
</nav>
