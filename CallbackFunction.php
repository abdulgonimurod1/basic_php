<?php

function sayHello(string $name, callable $filter) {
    $finalName = call_user_func($filter, $name);
    echo "Hello $finalName" . PHP_EOL;
}

sayHello("Muhammad", "strtoupper");
sayHello("Muhammad", "strtolower");
sayHello("Muhammad", function (string $name): string {
    return strtoupper($name);
});

sayHello('Goni', fn($name) => strtolower($name));