<?php

$barang = [
    ["nama" => "Spidol", "stok" => 4],
    ["nama" => "Map", "stok" => 2],
    ["nama" => "Penghapus", "stok" => 0],
    ["nama" => "Penggaris", "stok" => 3]
];

function cariNama(array $data, string $nama): array
{
    $hasil = [];

    foreach ($data as $item) {
        if (strtolower($item["nama"]) === strtolower($nama)) {
            $hasil[] = $item;
        }
    }

    return $hasil;
}

$hasil = cariNama($barang, "Penggaris");

echo "Hasil pencarian:" . PHP_EOL;

foreach ($hasil as $item) {
    echo "- " . $item["nama"] .
         " | Stok: " . $item["stok"] . PHP_EOL;
}