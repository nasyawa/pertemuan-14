<?php
include_once 'Mahasiswa.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $mahasiswa = new Mahasiswa();
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $jurusan = $_POST['jurusan'];
    $program_studi = $_POST['program_studi'];
    $ipk = $_POST['ipk'];

    echo $mahasiswa->update($nim, $nama, $tempat_lahir, $tanggal_lahir, $jurusan, $program_studi, $ipk);
} else {
    $nim = $_GET['nim'];
    // Ambil data mahasiswa berdasarkan NIM dan tampilkan dalam form untuk diedit
}
?>

<form method="POST" action="">
    <input type="hidden" name="nim" value="<?php echo $nim; ?>">
    <label>Nama:</label><input type="text" name="nama"><br>
    <label>Tempat Lahir:</label><input type="text" name="tempat_lahir"><br>
    <label>Tanggal Lahir:</label><input type="date" name="tanggal_lahir"><br>
    <label>Jurusan:</label><input type="text" name="jurusan"><br>
    <label>Program Studi:</label><input type="text" name="program_studi"><br>
    <label>IPK:</label><input type="text" name="ipk"><br>
    <button type="submit">Update Mahasiswa</button>
</form>
