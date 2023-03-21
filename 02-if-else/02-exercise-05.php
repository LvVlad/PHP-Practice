<?php

//Given variable (int) 50 create a condition that prints out "correct" if the variable is inside the range.
//Range should be stored within the 2 separated variables $y and $z.

$number = 50;
$y = 2;
$z = 1337;

if ($number>$y && $number<$z) {
    print "correct";
} else {
    print "incorrect";
}