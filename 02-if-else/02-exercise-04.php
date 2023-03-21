<?php

//By your choice, create condition with 3 checks.
//For example, if value is greater than X, less than Y and is an even number.

$num = 27;

if ($num > 18 && $num < 100 && $num == '27') {
    echo 'That was wierd age check, but ok';
} else {
    echo 'Sorry, you are too young or too old or not 27 years old';
}