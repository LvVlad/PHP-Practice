<?php

$wordList = ['train','computer','array','thermometer','processor','school'];

$pickedWord = $wordList[array_rand($wordList, 1)];
$pickedWordLetters = str_split($pickedWord);
$hiddenWord = str_repeat('_',count($pickedWordLetters));
$hiddenWordLetters = str_split($hiddenWord);
$lives = 3;

echo 'I want you play a little game, ready?'.PHP_EOL."You have $lives guesses and if you fail...".PHP_EOL;
echo '*************************************'.PHP_EOL.' This is the word you need to guess'.PHP_EOL;
echo $hiddenWord.PHP_EOL;

while ($lives > 0) {

    $guess= readline('Now is the time to guess a letter: ');
    $guessIndex = array_keys(str_split($pickedWord), $guess);

    if (!empty($guessIndex) && $guessIndex[0] > -1) {
        foreach ($guessIndex as $i) {
            $hiddenWordLetters[$i] = $guess;
        };
        echo implode($hiddenWordLetters);
        echo PHP_EOL;
    } else {
        $lives--;
        echo "Wrong letter. You have $lives lives left".PHP_EOL;
    }
    if ($pickedWord == implode($hiddenWordLetters)){
        echo 'I am surprised that you managed to guess it.';
        exit;
    }
}
echo 'Say your last words my friend';