<?php

$products = [
    'Coffee' => 180,
    'Tea' => 150,
    'Chips' => 220,
    'Chocolate' => 120,
    'Candies' => 250,
    'Ultra rare candy' => 333
];

$coins = [200, 100, 50, 20, 10, 5, 2, 1];
$names = array_keys($products);
$price = array_values($products);
$wallet = 0;

echo "Available products in vending machine: \n";
for ($i = 0; $i < count($names); $i++) {
    echo "$names[$i] - Price: $price[$i] - Purchase code: $i\n";
}

$choice = readline('Choose item you want to buy: ');
if ($choice > count($products)) {
    echo 'Invalid code';
} else {
    echo "You chose $names[$choice] and it will cost: $price[$choice]\n";
}

while ($price[$choice] > $wallet) {
    $inserted = readline('Insert your coin here: ');
    if (!in_array($inserted, $coins)) {
        echo 'Wrong coin'.PHP_EOL;
    } else {
        $wallet += $inserted;
    }
}

$reminder = $wallet - $price[$choice];

if ($reminder > 0) {
    echo "Wait while we calculate your change.\n";
    foreach ($coins as $coin) {
        $amount = floor($reminder / $coin);
        $reminder -= $coin * $amount;
        if ($amount > 0) {
            echo "Here are $coin coin $amount times\n";
        }
    }
}

echo "Thank you for purchase.\nHave a nice day!";