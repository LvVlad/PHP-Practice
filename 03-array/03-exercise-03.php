<?php

//Using dump method, dump out all 3 values in given object.

$person = new stdClass();
$person->name = "John";
$person->surname = "Doe";
$person->age = 50;

var_dump($person);
//var_dump($person->name,$person->surname,$person->age);