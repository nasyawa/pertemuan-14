<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbpro";

//membuat koneksi
$conn = mysqli_connect($servername, $username, $password, $dbname);
//cek
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
//siap sql
$sql = "INSERT INTO participants (nama, email) VALUES ('Faisal','faisal@gmail.com'),('Tata','tata@gmail.com')";

//ekskusi
if (mysqli_query($conn, $sql)) {
    echo "New record created succesfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
