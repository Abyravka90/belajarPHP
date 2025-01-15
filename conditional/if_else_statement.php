<?php
$usia = 50; //inisialisasi variable
if ($usia >= 60) //kondisi -> true
{
    echo "anda memasuki usia lansia";
} else {
    echo "anda belum memasuki usia lansia";
}

$usia = 50;
$usia = ($usia >= 50) ? "lansia" : "muda";
echo $usia;
