<?php

$name = "Ridwan"; // variabel global

function sayHello()
{
    global $name;
    echo "Hello $name" . PHP_EOL;
}

sayHello();