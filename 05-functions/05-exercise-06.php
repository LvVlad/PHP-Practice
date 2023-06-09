<?php

//Create an non-associative array with 5 elements where 3 are integers, 1 float and 1 string.
//Create a for loop that iterates non-associative array using php in-built function that determines count of elements in the array.
//Create a function that doubles the integer number.
//Within the loop using php in-built function print out the double of the number value (using your custom function).

$array = [10, 15, 2, 2.35, 'yes'];

function double($number) {
    if (is_int($number) || is_float($number)) {
        return $number * 2 ;
    } else {
        return "'$number' - not a number";
    }
}

for ($i=0; $i<count($array); $i++) {
    echo double($array[$i])."\n";
}