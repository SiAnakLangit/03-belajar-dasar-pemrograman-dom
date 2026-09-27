<?php

$nama = "Notebook";
$harga = 14000;
$jumlah = 2;
$ongkos = 3500;

$totalBarang = $harga * $jumlah;
$totalAkhir = $totalBarang + $ongkos;

echo "Nama       : " . $nama . PHP_EOL;
echo "Harga      : Rp" . $harga . PHP_EOL;
echo "Jumlah     : " . $jumlah . PHP_EOL;
echo "Ongkos     : Rp" . $ongkos . PHP_EOL;
echo "Total      : Rp" . $totalAkhir . PHP_EOL;