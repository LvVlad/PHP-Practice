<?php

//Create a non associative array with integers and print out only integers that divides by 3 without any left.

$numbers = [3,55,22,100,12,14,8,456,10];

for($i = 0; $i<count($numbers); $i++) {
    if($numbers[$i]%3===0){
        echo "$numbers[$i]\n";
    }
}