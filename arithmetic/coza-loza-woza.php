<?php

for ($i=1; $i <= 110; $i++) {
    if ($i % 105 == 0) {
        echo " CozaLozaWoza ";
    } elseif ($i % 35 == 0) {
        echo " LozaWoza ";
    } elseif ($i % 21 == 0) {
        echo " CozaWoza ";
    } elseif ($i % 15 == 0) {
        echo " CozaLoza ";
    } elseif ($i % 7 == 0) {
        echo " Woza " ;
    } elseif ($i % 5 == 0) {
        echo " Coza ";
    } elseif ($i % 3 == 0) {
        echo " Loza ";
    } else {
        echo " $i " ;
    }
    if ($i % 11 == 0) {
        echo "\n";
    }
}
