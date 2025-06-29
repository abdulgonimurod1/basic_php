<?php

function increment(){
    static $counter = 1;

    echo $counter . PHP_EOL;
    $counter++;
}

increment();
increment();
increment();