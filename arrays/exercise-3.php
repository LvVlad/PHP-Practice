<?php

$numbers = [
    1789, 2035, 1899, 1456, 2013,
    1458, 2458, 1254, 1472, 2365,
    1456, 2265, 1457, 2456
];

$search = readline("Enter the value to search for: ");

if (in_array($search, $numbers)) {
    echo 'We have this number in array'.PHP_EOL;
} else {
    echo "We don't have this number. Sorry.";
}
