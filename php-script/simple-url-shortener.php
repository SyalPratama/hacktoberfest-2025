<?php
// simple_url_shortener.php

function generateShortCode($length = 6) {
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    $shortCode = '';
    for ($i = 0; $i < $length; $i++) {
        $shortCode .= $characters[random_int(0, strlen($characters) - 1)];
    }
    return $shortCode;
}

// Simpan data ke file (sebagai database sederhana)
function saveUrl($originalUrl, $shortCode) {
    $data = json_decode(file_get_contents('urls.json'), true) ?? [];
    $data[$shortCode] = $originalUrl;
    file_put_contents('urls.json', json_encode($data, JSON_PRETTY_PRINT));
}

// Ambil URL berdasarkan short code
function getUrl($shortCode) {
    $data = json_decode(file_get_contents('urls.json'), true) ?? [];
    return $data[$shortCode] ?? null;
}

// Jika dijalankan dari browser
if (php_sapi_name() !== 'cli') {
    if (isset($_GET['u'])) {
        // Buat short URL
        $originalUrl = $_GET['u'];
        $shortCode = generateShortCode();
        saveUrl($originalUrl, $shortCode);
        echo "Short URL: <a href='?r=$shortCode'>http://localhost/simple_url_shortener.php?r=$shortCode</a>";
    } elseif (isset($_GET['r'])) {
        // Redirect ke URL asli
        $url = getUrl($_GET['r']);
        if ($url) {
            header("Location: $url");
            exit;
        } else {
            echo "URL tidak ditemukan.";
        }
    } else {
        echo '<form method="get">
                <input type="text" name="u" placeholder="Masukkan URL..." style="width:300px">
                <button type="submit">Shorten</button>
              </form>';
    }
}
?>
