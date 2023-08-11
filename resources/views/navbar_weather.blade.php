


<nav class="navbar navbar-expand-lg bg-transparent">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Mallorca</a>
        <a class="navbar-brand" href="#">
            <img src="../imagenes/visiting_icon.png" alt="" width="30" height="24">
          </a>

        <div class="col-sm-12 col-md-6">
            <div class="weather-container">
                <div class="weather-info">
                    <h2>{{ $weatherData['currentDay'] }}</h2>
                    <img src="{{ $weatherData['weatherIcon'] }}" alt="Weather Icon">
                    <p class="temperature">{{ $weatherData['temperature'] }} °C</p>
                </div>
                <div class="weather-date">
                    <p>{{ $weatherData['currentDate'] }}</p>
                </div>
            </div>
        </div>

    
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
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
                <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    Log Out
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>

                @endauth
            </ul>
        </div>
    </div>
</nav>
