<?php
if ($argc != 4) {
    echo "Usage: php kalkulator.php [angka1] [operator] [angka2]\n";
    echo "Contoh: php kalkulator.php 5 + 3\n";
    exit(1);
}

$angka1 = $argv[1];
$operator = $argv[2];
$angka2 = $argv[3];

if (!is_numeric($angka1) || !is_numeric($angka2)) {
    echo "Error: Kedua argumen pertama dan ketiga harus berupa angka.\n";
    exit(1);
}

$angka1 = (float) $angka1;
$angka2 = (float) $angka2;

switch ($operator) {
    case '+':
        $hasil = $angka1 + $angka2;
        break;
    case '-':
        $hasil = $angka1 - $angka2;
        break;
    case '*':
        $hasil = $angka1 * $angka2;
        break;
    case '/':
        if ($angka2 == 0) {
            echo "Error: Pembagian dengan nol tidak diperbolehkan.\n";
            exit(1);
        }
        $hasil = $angka1 / $angka2;
        break;
    case '%':
        $hasil = $angka1 % $angka2;
        break;
    default:
        echo "Error: Operator tidak dikenali. Gunakan +, -, *, /, atau %.\n";
        exit(1);
}

echo "Hasil: $hasil\n";

//hacktoberfest-2025
