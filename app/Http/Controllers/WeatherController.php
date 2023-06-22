<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;

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


        $weatherIcon = $data['weather'][0]['icon'];
        $weatherIcon = "https://openweathermap.org/img/w/" . $weatherIcon . ".png";


        // Aquí puedes pasar los datos a tu vista y mostrarlos como desees
        return ['temperature' => $temperature, 'weatherIcon' => $weatherIcon];

    }
}
