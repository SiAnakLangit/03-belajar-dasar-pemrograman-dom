<?php

function stokValid(string $input): bool
{
    $teks = trim($input);

    if ($teks === "") {
        return false;
    }

    return ctype_digit($teks);
}

$data = [" 5 ", "01"];

foreach ($data as $input) {
    $hasil = stokValid($input)
        ? "valid"
        : "ditolak";

    echo '"' . $input . '" => ' . $hasil . PHP_EOL;
}