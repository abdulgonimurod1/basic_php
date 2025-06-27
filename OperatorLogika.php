<?php

$hasil1 = true;
$hasil2 = false;

var_dump($hasil1 && $hasil2); // jika salah satu bernilai false maka hasilnya false (AND)
var_dump($hasil1 || $hasil2); // jika salah satu bernilai true maka hasilnya true (OR)
var_dump(!$hasil2); // nilai kebalikan dari $hasil2 (NOT)
var_dump($hasil1 xor $hasil2); // jika salah satu bernilai true maka hasilnya true (XOR) kalau keduanya bernilai true maka hasilnya false
