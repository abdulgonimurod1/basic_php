<?php

$nama = [
    'Abdul',
    'Ridwan',
    'Khannedy'
];

foreach ($nama as $name) {
    echo $name . PHP_EOL;
}

$data = [
    "name" => "Ridwan",
    "age" => 20,
    "address" => "Bandung"
];

foreach ($data as $key => $value) {
    echo $key . " : " . $value . PHP_EOL;
}