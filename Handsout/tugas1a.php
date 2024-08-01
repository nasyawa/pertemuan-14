<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbpro";

// Membuat koneksi
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Cek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Siapkan SQL
$sql = "INSERT INTO participants (nama, email) VALUES (?, ?)";

// Siapkan pernyataan
$stmt = mysqli_prepare($conn, $sql);

// Mengikat parameter
mysqli_stmt_bind_param($stmt, "ss", $nama, $email);

// Data baru
$nama = "Nasya";
$email = "Nasya@gmail.com";

// Eksekusi pernyataan
if (mysqli_stmt_execute($stmt)) {
    echo "New record created successfully";
} else {
    echo "Error: " . mysqli_stmt_error($stmt);
}

// Tutup pernyataan dan koneksi
mysqli_stmt_close($stmt);
mysqli_close($conn);
