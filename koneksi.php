<?php
$host = "localhost";
$user = "root";
$pass = ""; // Kosongkan jika tidak ada password
$db   = "wengkiuas11";

$koneksi = new mysqli($host, $user, $pass, $db);

if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}
?>
