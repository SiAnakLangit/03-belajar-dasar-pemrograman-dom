<?php

$namaBarang = "Pensil";
$hargaSatuan = 3000;
$jumlah = 3;
$ongkos = 2000;

$subtotal = $hargaSatuan * $jumlah;
$total = $subtotal + $ongkos;

echo "Barang   : " . $namaBarang . PHP_EOL;
echo "Subtotal : Rp" . $subtotal . PHP_EOL;
echo "Ongkos   : Rp" . $ongkos . PHP_EOL;
echo "Total    : Rp" . $total . PHP_EOL;