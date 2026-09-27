<?php

function diskonValid(string $input): bool
{
    $teks = trim($input);

    if ($teks === "") {
        return false;
    }

    if (!ctype_digit($teks)) {
        return false;
    }

    $nilai = (int) $teks;

    return $nilai >= 0 && $nilai <= 100;
}

$pengujian = [
    "5",
    "25",
    "75",
    "100",
    "101",
    "",
    "abc"
];

foreach ($pengujian as $input) {
    $hasil = diskonValid($input)
        ? "valid"
        : "ditolak";

    echo '"' . $input . '" => ' . $hasil . PHP_EOL;
}