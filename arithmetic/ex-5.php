<?php

$random = range(1, 100);
$number = array_rand($random, 1);

$guess = readline('I am thinking of number between 1-100. Try to guess it. ');

if ($guess > $number) {
    echo "Sorry, you are too high.  I was thinking of $number.";
} elseif ($guess < $number) {
    echo "Sorry, you are too low.  I was thinking of $number.";
} elseif ($guess == $number) {
    echo "You guessed it!  What are the odds?!?";
}