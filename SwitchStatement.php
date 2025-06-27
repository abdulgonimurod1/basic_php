<?php

$nilai = "C";

switch($nilai) {
    case "A":
        echo "Sangat Memuaskan";
        break;
    case "B":
    case "C":
        echo "Memuaskan";
        break;
    case "D":
        echo "Kurang";
        break;
    case "E":
        echo "Sangat Kurang";
        break;
    default:
        echo "Nilai Tidak Valid";
        break;
}
