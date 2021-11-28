<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Adapters\RestWeatherAdapter;

class WeatherController extends Controller
{
    private $restWeatherAdapter;

    public function __construct(RestWeatherAdapter $restWeatherAdapter)
    {
        $this->restWeatherAdpater = $restWeatherAdapter;
    }

    public function getRadiationUVdaily(): string
    {
        //$this->restWeatherAdapter->getRadiationUVdaily($name);
        $name= request()->get('name');  
        $restWeatherAdapter= new RestWeatherAdapter;
        $response= $restWeatherAdapter->getRadiationUVdaily($name);
        return json_encode($response[0]);
    }

}
