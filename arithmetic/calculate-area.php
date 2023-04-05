<?php

echo "Geometry Calculator\n\n";
echo "1. Calculate the Area of a Circle\n";
echo "2. Calculate the Area of a Rectangle\n";
echo "3. Calculate the Area of a Triangle\n";
echo "4. Quit\n";

$choice = readline("Enter your choice (1-4) : ");

if ($choice == 1) {
    $radius = readline("Enter desired circle radius: ");
    $circle = pi() * pow($radius, 2);
    echo "Area of a Circle is $circle";
} elseif ($choice == 2) {
    $width = readline("Enter width of rectangle: ");
    $length = readline("Enter height of rectangle: ");
    $rectangle = $width * $length;
    echo "Area of a Rectangle is $rectangle";
} elseif ($choice == 3) {
    $base = readline("Enter base of triangle: ");
    $height = readline("Enter height if triangle: ");
    $triangle = $base * $height * 0.5;
    echo "Area of a Triangle is $triangle";
}

if ($radius < 0 || $width < 0 || $length < 0 || $base < 0 || $height < 0) {
    echo 'You entered negative value.';
}