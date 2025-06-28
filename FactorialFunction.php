<?php

function factorial(int $number): int
{
    $total = 1;
    for ($i = 1; $i <= $number; $i++) {
        $total *= $i;
    }
    return $total;
}

var_dump(factorial(5));

function factorialRecursive(int $number): int
{
    if ($number === 1) {
        return 1;
    }
    return $number * factorialRecursive($number - 1);
}

var_dump(factorialRecursive(5));