<?php

$cash = 100;
$board = [];

$winningLines = [
    [[0,0],[0,1],[0,2],[0,3]],
    [[1,0],[1,1],[1,2],[1,3]],
    [[2,0],[2,1],[2,2],[2,3]],
    [[0,0],[1,1],[2,2],[2,3]],
    [[0,0],[0,1],[1,2],[2,3]],
    [[2,0],[1,1],[0,2],[0,3]],
    [[2,0],[2,1],[1,2],[0,3]]
];

$gameSymbols = [
    ['value'=> ' A', 'price'=> 5],
    ['value'=> ' K', 'price'=> 4],
    ['value'=> ' Q', 'price'=> 3],
    ['value'=> ' J', 'price'=> 2],
    ['value'=> '10', 'price'=> 1]
];

do{
    $input = readline('Spin? (y/n)');

    if ($input == 'n' || $cash == 0){
        break;
    }
    $cash--;

    for ($row=0; $row<3; $row++){
        for ($col=0; $col<4; $col++){
            $board[$row][$col] = array_rand($gameSymbols);
        }
    }

    foreach ($board as $rows) {
        foreach ($rows as $value) {
            echo $gameSymbols[$value]['value'] . ' |';
        }
        echo PHP_EOL;
    }

    foreach ($winningLines as $line) {
        $winningSymbol = [];
        foreach ($line as $slot) {
            $index = $board[$slot[0]][$slot[1]];
            $winningSymbol[$index] = $gameSymbols[$index];
        }
        if (count($winningSymbol) == 1) {
            $symbol = reset($winningSymbol);
            $cash += $symbol['price'];
        }
    }
    echo "your current balance is $cash $".PHP_EOL;

} while (true);
