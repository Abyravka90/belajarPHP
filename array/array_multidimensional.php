<?php

$angka = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
];

echo $angka[2][2] / $angka[0][2]; // output: 3
echo $angka[0][0] + $angka[2][2]; // output: 10
echo $angka[1][1] - $angka[0][1]; // output: 3
echo $angka[2][1] * $angka[1][1]; // output: 40
echo $angka[2][0] % $angka[0][0]; // output: 0  
