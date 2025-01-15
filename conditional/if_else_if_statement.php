<?php
$usia = 50;
if ($usia >= 60) {
    echo "Anda sudah masuk usia lansia";
} else if ($usia >= 26  && $usia < 60) {
    echo "Anda Sudah Dewasa";
} else if ($usia >= 17 and $usia < 26) {
    echo "Anda sudah Remaja";
} else {
    echo "anda belum masuk usia balita";
}

/*

17 - 19 -> Remaja
20 - 59 -> Dewasa
5 - 16 -> Anak-anak
3 - 4 -> Balita
0 - 2 -> Bayi

*/
