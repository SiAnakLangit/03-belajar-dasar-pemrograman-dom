<?php

function cekStok(int $stok): string
{
    if ($stok < 0) {
        return "Tidak valid";
    } elseif ($stok === 0) {
        return "Habis";
    } else {
        return "Tersedia";
    }
}

echo "-1: " . cekStok(-1) . PHP_EOL;
echo "0 : " . cekStok(0) . PHP_EOL;
echo "1 : " . cekStok(1) . PHP_EOL;
echo "100: " . cekStok(100) . PHP_EOL;