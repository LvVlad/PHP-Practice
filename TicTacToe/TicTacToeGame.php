<?php

$board = [
    [' ',' ',' '],
    [' ',' ',' '],
    [' ',' ',' ']
];

$player = 'X';
$round = 1;
$move = [];
$validMoves = ['00','01','02','10','11','12','20','21','22'];
$input = '';

while ($round < 10) {
    echo "Round: $round - $player move".PHP_EOL;
    echo " {$board[0][0]} | {$board[0][1]} | {$board[0][2]} ".PHP_EOL;
    echo '-----------'.PHP_EOL;
    echo " {$board[1][0]} | {$board[1][1]} | {$board[1][2]} ".PHP_EOL;
    echo '-----------'.PHP_EOL;
    echo " {$board[2][0]} | {$board[2][1]} | {$board[2][2]} ".PHP_EOL;

    $input = readline("PLayer $player choose your move: ");
    $move = str_split($input);

    if (!in_array($input,$validMoves)) {
        echo 'Wrong move!'.PHP_EOL;
    } elseif ($board[$move[0]][$move[1]] != ' ') {
        echo 'That cell already taken'.PHP_EOL;
    } else {
        $board[$move[0]][$move[1]] = $player;
        $round++;
    }

    for ($i=0; $i<3; $i++) {
        if ($board[0][$i] == $player && $board[1][$i] == $player && $board[2][$i] == $player) {
            exit("Player $player won");
        } elseif ($board[$i][0] == $player && $board[$i][1] == $player && $board[$i][2] == $player) {
            exit("Player $player won");
        } elseif ($board[0][0] == $player && $board[1][1] == $player && $board[2][2] == $player) {
            exit("Player $player won");
        } elseif ($board[2][0] == $player && $board[1][1] == $player && $board[0][2] == $player) {
            exit("Player $player won");
        }
    }

    if ($player =='X') {
        $player = 'O';
    } else {
        $player = 'X';
    }
}