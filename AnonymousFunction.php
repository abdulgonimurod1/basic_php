<?php

$sayHello = function ($name) {
    echo "Hello $name" . PHP_EOL;
};

$sayHello("Muhammad");

function sayGoodBye(string $name, $filter) {
    $finalName = $filter($name);
    echo "Good Bye $finalName" . PHP_EOL;
}

sayGoodBye("Muhammad", function (string $name): string {
    return strtoupper($name);
});

$filterFunction = function (string $name): string {
    return strtoupper($name);
};

sayGoodBye("Muhammad", $filterFunction);

$firstName = "Muhammad";
$lastName = "Ridwan";

$sayHallo = function () use ($firstName, $lastName) {
    echo "Hello $firstName $lastName" . PHP_EOL;
};

$sayHallo();
