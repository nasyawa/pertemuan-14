<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dboo";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Mengecek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
echo "Koneksi berhasil<br>";

// Siapkan SQL
$sql = "INSERT INTO participants (nama, email) VALUES (?, ?)";

// Siapkan pernyataan
$stmt = $conn->prepare($sql);

// Mengikat parameter
$stmt->bind_param("ss", $nama, $email);

// Data baru
$nama = "Kirana";
$email = "Kirana@gmail.com";

// Eksekusi pernyataan
if ($stmt->execute()) {
    echo "New record created successfully";
} else {
    echo "Error: " . $stmt->error;
}

// Tutup pernyataan dan koneksi
$stmt->close();
$conn->close();
