<?php
// membuat function
$penjumlahan = fn($a, $b) => $a + $b;
echo $penjumlahan(5, 5);

//
function penjumlahan($a, $b)
{
    return $a + $b;
}
//  call function
$penjumlahan = penjumlahan(5, 5);
echo $penjumlahan;
