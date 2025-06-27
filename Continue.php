<?php

for($counter = 1; $counter <= 20; $counter++){
    if($counter % 2 == 1){
        continue;
    }
    echo $counter . PHP_EOL;
}