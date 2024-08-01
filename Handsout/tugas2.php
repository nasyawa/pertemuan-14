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
$sql = "SELECT * FROM participants ORDER BY nama ASC";

// Eksekusi
$result = $conn->query($sql);

// Cek hasil
if ($result->num_rows > 0) {
    // Output data setiap baris
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"] . " - Nama: " . $row["nama"] . " - Email: " . $row["email"] . "<br>";
    }
} else {
    echo "0 results";
}

// Tutup koneksi
$conn->close();
?>
