<?php
include_once 'Mahasiswa.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $mahasiswa = new Mahasiswa();
    $nim = $_POST['nim'];

    echo $mahasiswa->delete($nim);
}
?>
