<?php

$surveyed = 12467;
$purchased_energy_drinks = 0.14;
$prefer_citrus_drinks = 0.64;

function calculate_energy_drinkers(int $numberSurveyed, float $percentage)
{
    if($numberSurveyed <= 0 || $purchased_energy_drinks = null || is_numeric($numberSurveyed) == false)
    {
        throw new LogicException("sad face 2.0");
    }

    return round($numberSurveyed * $percentage);
}

function calculate_prefer_citrus(int $numberSurveyed, float $percentage)
{
    if($numberSurveyed <= 0 || $prefer_citrus_drinks = null || is_numeric($numberSurveyed) == false)
    {
        throw new LogicException("Wrong data");
    }

    return round($numberSurveyed * $percentage);
}

try
{
    echo "Total number of people surveyed " . $surveyed.PHP_EOL;
    echo "Approximately " .calculate_energy_drinkers($surveyed, $purchased_energy_drinks). " bought at least one energy drink".PHP_EOL;
    echo calculate_prefer_citrus($surveyed, $prefer_citrus_drinks). " of those " . "prefer citrus flavored energy drinks.";
}
 catch (LogicException $e) {
    echo "Error: " . $e->getMessage();
}

