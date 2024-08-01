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
echo "Koneksi berhasil<br>;";

//siap sql
$sql = "INSERT INTO participants (nama, email) VALUES ('Faisal','faisal@gmail.com'),('Tata','tata@gmail.com')";

//ekskusi
if ($conn->query($sql) === TRUE) {
    echo "New record created succesfully";
} else {
    echo "Error: ". $sql."<br>". $conn->error;
}
    $conn->close();?>