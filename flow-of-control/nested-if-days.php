<?php

$day = readline("Enter number for a day: ");

if (is_numeric($day)) {
    if ($day == 0) {
        echo "Sunday";
    }
    if ($day == 1) {
        echo "Monday";
    }
    if ($day == 2) {
        echo "Tuesday";
    }
    if ($day == 3) {
        echo "Wednesday";
    }
    if ($day == 4) {
        echo "Thursday";
    }
    if ($day == 5) {
        echo "Friday";
    }
    if ($day == 6) {
        echo "Saturday";
    }
    if ($day > 6) {
        echo  'Wrong number';
    }
} else {
    echo 'Wrong input';
}