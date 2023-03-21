<?php

//Create an associative array with objects of multiple persons.
//Each person should have a name, surname, age and birthday.
// Using loop (by your choice) print out every persons personal data.

$people = [];

$personOne = new stdClass();
$personOne->name = 'Karls';
$personOne->surname = 'Ozols';
$personOne->age = 58;
$personOne->birthday = '26.03.1965';

$personTwo = new stdClass();
$personTwo->name = 'Gilberts';
$personTwo->surname = 'Smags';
$personTwo->age = 25;
$personTwo->birthday = '15.05.1998';

array_push($people,$personOne,$personTwo);

foreach ($people as $person=>$data) {
    echo "Person named: $data->name $data->surname was born in $data->birthday and is $data->age years old\n";
}