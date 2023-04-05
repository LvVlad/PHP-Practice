<?php

$random = range(0, 100);
shuffle($random);
$numbers = array_slice($random, 0, 10);

echo 'Array 1: ';
for ($i = 0; $i < 10; $i++) {
    echo "$numbers[$i] ";
}

echo PHP_EOL.'Array 2: ';
$numbers[9]= -7;
foreach ($numbers as $number) {
    echo "$number ";
}