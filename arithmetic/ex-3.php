<?php

$numbers = range(1, 100, 1);
$sum = array_sum($numbers);
$average = $sum / count($numbers);

echo "The sum of 1 to 100 is $sum \n";
echo "The average is $average";
