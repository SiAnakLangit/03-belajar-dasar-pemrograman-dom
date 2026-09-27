<?php

$total = 0;
$hargaPensil = 2000;
$jumlahPensil = 5;

for ($nomor = 1; $nomor <= $jumlahPensil; $nomor++) {
    $total += $hargaPensil;
}

echo "Jumlah pensil: " . $jumlahPensil . PHP_EOL;
echo "Harga satuan : Rp" . $hargaPensil . PHP_EOL;
echo "Total        : Rp" . $total . PHP_EOL;