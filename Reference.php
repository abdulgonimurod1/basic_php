<?php

$name = "Ridwan";

$otherName = &$name;

$otherName = "Goni";

echo $name . PHP_EOL;
echo $otherName . PHP_EOL;

function incremente(int &$value) {
    $value ++;
}

$counter = 1;

incremente($counter);

echo $counter . PHP_EOL;


function &getValue(){
    static $value = 1;
    return $value;
}

$a = &getValue();
$a = 200;