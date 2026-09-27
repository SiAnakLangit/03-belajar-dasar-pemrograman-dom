<?php

$total = 0;
$hargaSatuan = 4500;

for ($nomor = 1; $nomor <= 4; $nomor++) {
    $total += $hargaSatuan;
}

echo "Harga satuan : Rp" . $hargaSatuan . PHP_EOL;
echo "Jumlah       : 4" . PHP_EOL;
echo "Total        : Rp" . $total . PHP_EOL;