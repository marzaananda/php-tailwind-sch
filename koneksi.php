<?php
$host = "localhost";
$user = "root"; // default XAMPP
$pass = "";     // kosongkan kalau tidak ada password
$db   = "absensi_siswa"; // 🔁 GANTI NAMA DATABASE DI SINI

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
  die("Koneksi gagal: " . mysqli_connect_error());
}
?>
