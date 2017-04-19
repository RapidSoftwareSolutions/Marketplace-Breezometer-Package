<?php
$routes = [
    'metadata',
    'getAirQuality',
    'getSpecificDateAirQuality',
    'getAirQualityHistoryForDateRange',
    'getAirQualityForecast',

];
foreach($routes as $file) {
    require __DIR__ . '/../src/routes/'.$file.'.php';
}

