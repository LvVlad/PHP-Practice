<?php

//Create a variable $plateNumber that stores your car plate number. Create a switch statement that ->
//-> prints out that its your car in case of your number.

$plateNumber = 'GG-1337';

switch ($plateNumber) {
    case 'OH-2245':
        echo 'Cool car';
        break;
    case 'JK-8888':
        echo 'Interesting car number';
        break;
    case 'GG-1337':
        echo 'Hey that is my imaginary plate number';
        break;
    default:
        echo 'Get your self a plate number';
}