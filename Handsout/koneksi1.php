<?php
$servername = "localhost";
$username = "root";
$password = "";

//buat koneksi
$conn = new mysqli($servername, $username, $password);
//cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
echo "Koneksi berhasil";
