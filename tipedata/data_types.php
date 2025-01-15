<?php
$string1 = "Elna Fitria"; //ini tipe data string dengan double quote
$string2 = 'Elna Fitria'; //ini tipe data string dengan single quote
$integer = 10; // ini tipe data bilangan tanpa koma
$double = 3.14; //ini tipe data bilangan berkoma
$boolean = true; //tipe data logika 
$array = ["Elna", 15, true];
$array2 = array('name' => "Nama saya Elna", 'age' => "Usia Saya 15 ", 'status' => "saya seorang siswa");

echo 'Nama Saya = '.$array[0]."\n";
echo 'Saya Siswa = '.$array[2]."\n";
echo 'Usia Saya = '.$array[1]."\n";
echo "\n";
echo $array2['name']."\n";
echo $array2['age']."\n";
echo $array2['status']."\n";

?>