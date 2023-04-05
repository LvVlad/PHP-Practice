<?php

$day = readline("Enter which day to display: ");

switch ($day) {
    case (0):
        echo 'Sunday';
        break;
    case (1):
        echo 'Monday';
        break;
    case (2):
        echo 'Tuesday';
        break;
    case (3):
        echo 'Wednesday';
        break;
    case (4):
        echo 'Thursday';
        break;
    case (5):
        echo 'Friday';
        break;
    case (6):
        echo 'Saturday';
        break;
    default:
        echo 'Wrong number, enter numbers from 0 to 6';
        break;
}