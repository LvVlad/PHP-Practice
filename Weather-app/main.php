<?php

$city= readline('Enter City name: ');
$code = readline('Enter country code (UK, LT, LV , etc.): ');
$apiKey = "d6b2a230f2cbe371963c80a81b932be6";
$url = "http://api.openweathermap.org/data/2.5/weather?q={$city},{$code}&appid={$apiKey}&units=metric";

$data = json_decode(file_get_contents($url), true);
//$error = json_last_error();
//var_dump($data, $error);die;

echo "Right now in a lovely city of {$city} is {$data['weather'][0]['main']},\n";
echo "while the temperature is {$data['main']['temp']}°C";