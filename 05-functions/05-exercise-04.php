<?php

//Create a array of objects that uses the function of exercise 3 but in loop printing out if the person has reached age of 18.

$people =[];

$personOne = new stdClass();
$personOne->name = 'Martins';
$personOne->surname = 'Rakatovskis';
$personOne->age = 49;

$personTwo = new stdClass();
$personTwo->name = 'Luisa';
$personTwo->surname = 'Markus';
$personTwo->age = 17;

array_push($people,$personTwo,$personOne);

function ageObserve($person) {
    if ($person->age>=18) {
        echo "$person->name $person->surname has reached 18 years of age.".PHP_EOL;
    } else {
        echo "$person->name $person->surname is too young".PHP_EOL;
    }
}

foreach ($people as $human) {
    ageObserve($human);
}