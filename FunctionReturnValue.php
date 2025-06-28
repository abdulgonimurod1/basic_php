<?php

function sum(int $value1, int $value2) : int
{
    $total = $value1 + $value2;
    return $total;
}

$result = sum(1, 2);
echo $result . PHP_EOL;

$result = sum(1, 100);
echo $result . PHP_EOL;

function GetFinalScore(int $score) : string
{
    if ($score >= 90) {
        return "A";
    } else if ($score >= 80) {
        return "B";
    } else if ($score >= 70) {
        return "C";
    } else {
        return "D";
    }
}

$score = GetFinalScore(80);
var_dump($score);