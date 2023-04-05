<?php

$numbers = [];

$choice = readline("How many numbers are you planning to compare: ");

for ($i = 1; $i <= $choice; $i++) {
    if (substr($i, -1) == 1 && substr($i, -2) != 11) {
        $numbers[] = readline("Enter your $i".'st'.' number: ');
    } elseif (substr($i, -1) == 2 && substr($i, -2) != 12) {
        $numbers[] = readline("Enter your $i".'nd'.' number: ');
    } elseif (substr($i, -1) == 3 && substr($i, -2) != 13) {
        $numbers[] = readline("Enter your $i".'rd'.' number: ');
    } else {
        $numbers[] = readline("Enter your $i".'th'.' number: ');
    }
}

echo "Largest number of them all is: ".max($numbers);