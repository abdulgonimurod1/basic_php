<?php

function sayHello($name = "Guest") {
    echo "Hello $name" . PHP_EOL;
}

sayHello();
sayHello("Ridwan");

// TYpe Declaration
function sum(int $value1, int $value2) {
    $total = $value1 + $value2;
    return $total;
}

echo sum(1, 2) . PHP_EOL;
echo sum(1, "2") . PHP_EOL;

// Argument by Reference

// Variable-length Argument
function sumAll(int ...$values) {
    $total = 0;
    foreach($values as $value) {
        $total += $value;
    }
    return $total;
}
$value = [1, 2, 3, 4, 5];
echo sumAll(...$value);
echo sumAll(1, 2, 3, 4, 5) . PHP_EOL;
echo sumAll(1, 2, 3, 4, 5, 6, 7, 8, 9, 10) . PHP_EOL;