<?php

$units = readline('What units will you use? (0-metric/1-imperial): ');
$weight = readline('Enter weight (kg/pounds): ');
$height = readline('Enter height (cm/inch): ');

if ($units == 0) {
    $weight = number_format(($weight * 2.205), 2);
    $height = number_format(($height / 2.54), 2);
}

$bmi = ($weight * 703) / ($height * $height);

if ($bmi > 25) {
    echo 'Person is considered overweight.';
} elseif ($bmi < 18.5) {
    echo 'Person is considered underweight.';
} else {
    echo "Person's weight is considered optimal.";
}