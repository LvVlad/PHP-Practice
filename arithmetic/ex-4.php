<?php

$base = 1;
$factorial = readline('Enter number you want factorial of: ');

for ($i = 1; $i <= $factorial; $i++) {
    $base = $base * $i;
}

echo $base;