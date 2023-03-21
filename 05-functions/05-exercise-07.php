<?php

//Imagine you own a gun store. Only certain guns can be purchased with license types.
//Create an object (person) that will be the requester to purchase a gun (object) Person object has a name, valid licenses (multiple) & cash.
//Guns are objects stored within an array. Each gun has license letter, price & name.
//Using PHP in-built functions determine if the requester (person) can buy a gun from the store.

$buyer = new stdClass();
$buyer->name = 'Vlads';
$buyer->license = ['A1', 'A2', 'C1'];
$buyer->cash = 10200;

function addGun(string $name, int $price, string $license ):stdClass {
    $gun = new stdClass();
    $gun->name = $name;
    $gun->price = $price;
    $gun->license = $license;
    return $gun;
}

$store = [
    'ak-47'=>addGun('ak-47',300,'A2'),
    'M4A1'=>addGun('M4A1', 800, 'C2'),
    'MP-155'=>addGun('MP-155', 100, 'B1'),
    'Flatline'=>addGun('Flatline', 500, 'C1'),
    'Vector'=>addGun('Vector', 900, 'A1'),
    'Hek'=>addGun('Hek', 20000, 'W1'),
    'Super Shotgun'=>addGun('Super Shotgun', 666, 'DOOM')
];

$purchase = readline("Hello there traveler, which weapon do you want?");

if(!array_key_exists($purchase,$store)) {
    echo "Sorry i don't have such weapon. \n";
}

$selected = $store[$purchase];

if(!in_array($selected->license,$buyer->license)){
    echo "Sorry but you don't have right license for that \n";
} elseif ($buyer->cash<$selected->price){
    echo "Insufficient pay \n";
} else {
    echo "Now you are proud owner of $purchase! Come again.";
}