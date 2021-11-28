<?php

namespace App\Contracts;

interface WeatherInterface {
    public function getRadiationUVdaily(string $name);
}