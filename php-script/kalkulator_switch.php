<?php
$nilai1 = 8;
$nilai2 = 3;
$operasi = "kali";
switch ($operasi) {
    case "tambah":
        echo $nilai1 + $nilai2;
        break;
    case "kurang":
        echo $nilai1 - $nilai2;
        break;
    case "kali":
        echo $nilai1 * $nilai2;
        break;
    case "bagi":
        echo $nilai1 / $nilai2;
        break;
    default:
        echo "Operasi tidak dikenal";
}
?>
