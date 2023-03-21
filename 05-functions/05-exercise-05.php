<?php

//Create a 2D associative array in 2nd dimension with fruits and their weight.
//Create a function that determines if fruit has weight over 10kg. Create a secondary array with shipping costs per weight.
//Meaning that you can say that over 10 kg shipping costs are 2 euros, otherwise its 1 euro.
//Using foreach loop print out the values of the fruits and how much it would cost to ship this product.

$productWeight = [
    "dairy"=>[
        "milk"=>15,
        "sourcream"=>2,
        "creamcheese"=>5
    ],
    "fruits"=>[
        "bananas"=>5,
        "apples"=>15,
        "pineapples"=>9
    ]
];

$costs =[
    "over 10kg"=>2,
    "under 10kg"=>1
];

function weightCheck($mass, $price) {
    if ($mass>10) {
        echo $mass * $price["over 10kg"];
    } else {
        echo $mass * $price["under 10kg"];
    }
}

foreach ($productWeight["fruits"] as $name=>$weight) {
    echo "Shipping weight of $name is $weight kg and i will cost: ".weightCheck($weight, $costs).'eur'."\n";
}
