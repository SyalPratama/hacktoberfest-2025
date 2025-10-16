<?php
$login = true;
$role = "admin";
if ($login && $role == "admin") {
    echo "Akses penuh";
} elseif ($login && $role == "user") {
    echo "Akses terbatas";
} else {
    echo "Tidak ada akses";
}
?>
