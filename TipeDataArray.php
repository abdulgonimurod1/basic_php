<?php

$names = ["Eko", "Kurniawan", "Khannedy"];
$values = array(1, 2, 3.5);

$names[0] = "Ridwan"; //mengganti data di index ke 0 yaitu Eko menjadi Ridwan

unset($names[1]); //menghapus data di index ke 1

$names[] = "Kurniawan"; //menambahkan data di akhir

var_dump(count($names)); //menghitung jumlah data pada array

array_push($names, "Goni"); //menambahkan data di akhir

$goni = array(
    "id" => 1,
    "name" => "Goni",
    "age" => 20,
    "address" => array(
        "city" => "Jakarta",
        "country" => "Indonesia"
    )
);

var_dump(($goni["name"])); //menampilkan data pada array dengan index / key tertentu
var_dump(($goni["address"]["city"])); //menampilkan data pada array didalam array (nested array)
var_dump($names);

