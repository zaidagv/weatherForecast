<?php

namespace App\Adapters;

use App\Contracts\WeatherInterface;
use Illuminate\Support\Facades\Http;
use PhpParser\Node\Expr\Cast\Object_;

class RestWeatherAdapter implements WeatherInterface {

    private $endoint;
    
    public function __construct()
    {
        $this->endpoint = 'https://restcountries.com/v3.1/';
    }

    public function getRadiationUVdaily(string $name) : array
    {
        $response = Http::get($this->endpoint . 'name/' . $name);
        return $response->json();
    }

}