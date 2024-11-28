<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "loginregistercombat";

// Membuat koneksi
$koneksi = mysqli_connect($host, $user, $pass, $dbname);

// Memeriksa koneksi
if (!$koneksi) {
    die("Connection failed: " . mysqli_connect_error());
}
?>