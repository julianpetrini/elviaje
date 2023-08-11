

<nav class="navbar navbar-expand-lg bg-transparent">
    <div class="container-fluid">
        <button class="navbar-toggler navbarweather" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <div class="weather-container d-lg-none">
                <!-- Esta sección se mostrará solo en dispositivos móviles -->
                <p class="temperature">{{ $weatherData['currentDay'] }}</p>
                <img src="{{ $weatherData['weatherIcon'] }}" alt="Weather Icon">
                <p class="temperature">{{ $weatherData['temperature'] }} °C</p>
                <p>{{ $weatherData['currentDate'] }}</p>
            </div>
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item d-none d-lg-block">
                    <!-- Esta sección se mostrará solo en dispositivos de escritorio -->
                    <div class="weather-container">
                        <p class="temperature">{{ $weatherData['currentDay'] }}</p>
                        <img src="{{ $weatherData['weatherIcon'] }}" alt="Weather Icon">
                        <p class="temperature">{{ $weatherData['temperature'] }} °C</p>
                        <p>{{ $weatherData['currentDate'] }}</p>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('welcome') }}">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('agenda.index') }}">AGENDA</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('sleeping.index') }}">HOTEL</a>
                </li>
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">LOG IN</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">REGISTER</a>
                    </li>
                @endguest
                @auth
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('agenda.create') }}">Create a Plan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('sleeping.create') }}">Create a Hotel</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Log Out
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>