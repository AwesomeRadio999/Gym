<?php
$host = "localhost";
$user = "root";
$pass = ""; // Ubah jika password MySQL kamu tidak kosong
$db   = "gym_db";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
