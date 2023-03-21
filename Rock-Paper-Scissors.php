<?php

$playable = ['rock','paper','scissors','lizard','spock'];

$winningChart = [
    'rock'=>['scissors', 'lizard'],
    'paper'=>['rock', 'spock'],
    'scissors'=>['paper', 'lizard'],
    'lizard'=>['paper', 'spock'],
    'spock'=>['scissors', 'rock']
];

$playerMove = readline('Choose you fighting method or something:');
$computerMove = $playable[array_rand($playable, 1)];
echo "You have chosen - $playerMove and computer played - $computerMove \n";

if($computerMove === $playerMove){
    echo 'Draw';
} elseif (in_array($playerMove, $winningChart[$computerMove])){
    echo 'Computer Won!';
} else {
    echo 'You Won!';
}