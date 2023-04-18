<?php

require_once 'vendor/autoload.php';


$city= readline('Enter City name: ');
$code = readline('Enter country code (UK, LT, LV , etc.): ');
$apiKey = "d6b2a230f2cbe371963c80a81b932be6";
$client = new \GuzzleHttp\Client();

$url = "http://api.openweathermap.org/data/2.5/weather?q={$city},{$code}&appid={$apiKey}&units=metric";
$response = $client->request('GET', $url);

$data = json_decode($response->getBody()->getContents(), true);

echo "Right now in a lovely city of {$city} is {$data['weather'][0]['main']},\n";
echo "while the temperature is {$data['main']['temp']}°C";