<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Carbon\Carbon;

class WeatherController extends Controller
{
    public function getWeather()
    {
        $client = new Client();
        $apiKey = 'f7d0eba892c975a2c99969412cecaad4'; // Reemplaza con tu clave API de OpenWeatherMap
        $url = "https://api.openweathermap.org/data/2.5/weather?lat=39.5696&lon=2.6502&appid=$apiKey";

        $response = $client->get($url);
        $data = json_decode($response->getBody(), true);

        $temperature = $data['main']['temp'];
        $temperature = $temperature - 273.15;
        $temperature = round($temperature);

        $currentDate = Carbon::now()->format('d.m.y');
        $currentDay = Carbon::now()->format('l');

        $weatherIcon = $data['weather'][0]['icon'];
        $weatherIcon = "https://openweathermap.org/img/w/" . $weatherIcon . ".png";

        $weatherData = [
            'temperature' => $temperature,
            'weatherIcon' => $weatherIcon,
            'currentDate' => $currentDate,
            'currentDay' => $currentDay,
        ];

        return $weatherData;
    }
}
