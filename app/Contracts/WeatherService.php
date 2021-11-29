<?php

namespace App\Contracts;

interface WeatherService {
    public function getRadiationUVdaily(string $name);
}