<?php
$quotes = [
    "Hidup adalah perjalanan, bukan tujuan.",
    "Kerja keras mengalahkan bakat ketika bakat tidak bekerja keras.",
    "Belajar dari kesalahan adalah kunci sukses.",
    "Jangan takut gagal, takutlah jika tidak mencoba.",
];
$quote = $quotes[array_rand($quotes)];
?>
<p>Quote Hari Ini: "<?= $quote ?>"</p>
<p>Hacktober fest 2025</p>
