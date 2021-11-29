<?php

namespace App\Adapters;

use App\Contracts\WeatherService;
use Illuminate\Support\Facades\Http;
use PhpParser\Node\Expr\Cast\Object_;

class RestWeatherAdapter implements WeatherService {

    private $endoint;
    
    public function __construct()
    {
        $this->endpoint = config('services.weather.endpoint');
    }

    public function getRadiationUVdaily(string $name) : array
    {
        $response = Http::get($this->endpoint . 'name/' . $name);
        return $response->json();
    }

}