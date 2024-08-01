<?php
$servername = "localhost";
$username = "root";
$password = "";

//buat koneksi
$conn = mysqli_connect($servername, $username, $password);
if ($conn->connect_error) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
echo "Koneksi berhasil";
