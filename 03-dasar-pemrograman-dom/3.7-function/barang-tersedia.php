<?php

function barangTersedia(array $data): array
{
    $hasil = [];

    foreach ($data as $item) {
        if ($item["stok"] > 0) {
            $hasil[] = $item;
        }
    }

    return $hasil;
}

$daftarBarang = [
    ["nama" => "Pulpen", "stok" => 5],
    ["nama" => "Buku", "stok" => 0],
    ["nama" => "Stabilo", "stok" => 3]
];

$hasil = barangTersedia($daftarBarang);

foreach ($hasil as $item) {
    echo $item["nama"] .
         " - Stok: " . $item["stok"] . PHP_EOL;
}