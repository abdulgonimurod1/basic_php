<?php

$name = null;
$age = 22;

if(is_null($name)) {
    $name = "Guest";
    echo "My name is $name, I'm $age years old";
}else{
    echo "My name is $name, I'm $age years old";
}

var_dump(isset($name)); //pengecekan apakah variabel $name ada atau tidak