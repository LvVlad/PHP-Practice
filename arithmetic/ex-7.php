<?php

$a = 9.81;
$v = readline('Enter initial speed(m/s): ');
$t = readline('Enter time spent in free-falling (seconds): ');
$x = readline('Enter initial point(m): ');

$gravity = 0.5 * ($a * $t * $t) + $v * $t + $x;
echo -$gravity;