<?php

$nilai = 94;

if ($nilai < 0 || $nilai > 100) {
    echo "Tidak valid" . PHP_EOL;
} elseif ($nilai >= 90) {
    echo "Sangat baik" . PHP_EOL;
} elseif ($nilai >= 75) {
    echo "Lulus" . PHP_EOL;
} else {
    echo "Belajar lagi" . PHP_EOL;
}