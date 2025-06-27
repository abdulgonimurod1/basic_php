<?php

$first = [
    "first_name"=>"Abdul"
];

$last = [
    "first_name"=>"Ridwan",
    "last_name"=>"Khannedy"
];

$full = $first + $last; // union

var_dump($full);

$a = [
    "first_name" => "Abdul",
    "last_name" => "Ridwan"
];

$b = [
    "first_name" => "Ridwan",
    "last_name" => "Khannedy"
];

var_dump($a == $b);