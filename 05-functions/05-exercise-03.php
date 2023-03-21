<?php

//Create a person object with name, surname and age.
//Create a function that will determine if the person has reached 18 years of age.
//Print out if the person has reached age of 18 or not.

$person = new stdClass();
$person->name = 'Martins';
$person->surname = 'Rakatovskis';
$person->age = 49;

function ageCheck($obj) {
    if ($obj->age>=18) {
        echo 'Person has reached 18 years of age.';
    } else {
        echo 'Person is too young';
    }
}

ageCheck($person);