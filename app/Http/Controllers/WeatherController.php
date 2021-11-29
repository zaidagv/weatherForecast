<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Adapters\RestWeatherAdapter;
use App\Contracts\WeatherService;

class WeatherController extends Controller
{
    public function getRadiationUVdaily( WeatherService $weatherService ): string
    {
        $name= request()->get('name');  
        $response = $weatherService->getRadiationUVdaily($name);
        return json_encode($response[0]);
    }

}
