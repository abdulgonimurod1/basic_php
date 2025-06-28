<?php

function foo() {
    echo 'Foo' . PHP_EOL;
}

function bar() {
    echo 'Bar' . PHP_EOL;
}

$namaFungsiYangDiPanggil = 'foo';
$namaFungsiYangDiPanggil();

$namaFungsiYangDiPanggil = 'bar';
$namaFungsiYangDiPanggil();

function sayHello(string $name, $filter)
{
    $finalName = $filter($name);
    echo "Hello $finalName" . PHP_EOL;
}

function contoh(string $name) :string {
    return $name;
}

sayHello('Muhammad', 'contoh');
sayHello('Muhammad', 'strtoupper');
sayHello('Muhammad', 'strtolower');