<?php
include_once 'Mahasiswa.php';

$mahasiswa = new Mahasiswa();
$mahasiswa_list = $mahasiswa->read();

echo "<h2>Daftar Mahasiswa</h2>";
echo "<table>";
echo "<tr><th>NIM</th><th>Nama</th><th>Tempat Lahir</th><th>Tanggal Lahir</th><th>Jurusan</th><th>Program Studi</th><th>IPK</th><th>Aksi</th></tr>";
while ($row = $mahasiswa_list->fetch_assoc()) {
    echo "<tr>";
    echo "<td>{$row['nim']}</td>";
    echo "<td>{$row['nama']}</td>";
    echo "<td>{$row['tempat_lahir']}</td>";
    echo "<td>{$row['tanggal_lahir']}</td>";
    echo "<td>{$row['jurusan']}</td>";
    echo "<td>{$row['program_studi']}</td>";
    echo "<td>{$row['ipk']}</td>";
    echo "<td>
            <form method='post' action='update.php' class='inline'>
                <input type='hidden' name='nim' value='{$row['nim']}'>
                <input type='submit' value='Edit'>
            </form>
            <form method='post' action='delete.php' class='inline'>
                <input type='hidden' name='nim' value='{$row['nim']}'>
                <input type='submit' value='Hapus'>
            </form>
          </td>";
    echo "</tr>";
}
echo "</table>";
?>
