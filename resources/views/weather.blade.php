



<div class="weather-container">
    <div class="weather-info">
        <h2>{{ $weatherData['currentDay'] }}</h2>
        <img src="{{ $weatherData['weatherIcon'] }}" alt="Weather Icon">
        <div class="temperature">{{ $weatherData['temperature'] }}°C</div>
        <div class="weather-date">{{ $weatherData['currentDate'] }}</div>
    </div>
</div>