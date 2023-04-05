<?php

$number1 = readline('Enter first number: ');
$number2 = readline('Enter second number: ');

if ($number1 == 15 || $number2 == 15) {
    echo 'HI';
    return true;
} elseif ($number1 + $number2 == 15 || abs($number1 - $number2) == 15) {
    echo  "Hi 2";
    return true;
}