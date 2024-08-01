<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dboo";

//membuat koneksi
$conn =  new mysqli($servername, $username, $password, $dbname);
//mengecek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
//buat tabel
$sql = "CREATE TABLE participants (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
nama VARCHAR(50) NOT NULL,
email VARCHAR(50),
tgl_registrasi TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP)";
if ($conn->query($sql) === TRUE) {
    echo "Table participant created succes";
} else {
    echo "Error creating table: " . $conn->error;
}
$conn->close();
