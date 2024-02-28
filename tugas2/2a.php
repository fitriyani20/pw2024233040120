<?php 

$namaDepan = "Fitriyani";
$namaBelakang = "Rahmadini";

for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 === 0) {
        if ($i % 3 === 0 && $i % 5 === 0) {
            echo $namaDepan . " " . $namaBelakang ."<br />";
        }
        else {
            echo $namaDepan."<br />";
        }
    } elseif ($i % 5 === 0) {
        echo $namaBelakang."<br />";
    } 
    else {
        echo $i."<br />";
    }
}


?>