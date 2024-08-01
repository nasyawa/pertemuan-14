<?php
include_once 'config.php';

class Mahasiswa extends Database
{
    public function create($nim, $nama, $tempat_lahir, $tanggal_lahir, $jurusan, $program_studi, $ipk)
    {
        $stmt = $this->conn->prepare("INSERT INTO mahasiswa (nim, nama, tempat_lahir, tanggal_lahir, jurusan, program_studi, ipk) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("isssssd", $nim, $nama, $tempat_lahir, $tanggal_lahir, $jurusan, $program_studi, $ipk);
        if ($stmt->execute()) {
            return "Data berhasil ditambahkan.";
        } else {
            return "Error: " . $stmt->error;
        }
    }

    public function read()
    {
        $query = "SELECT * FROM mahasiswa ORDER BY nim ASC";
        $result = $this->conn->query($query);
        return $result;
    }

    public function update($nim, $nama, $tempat_lahir, $tanggal_lahir, $jurusan, $program_studi, $ipk)
    {
        $stmt = $this->conn->prepare("UPDATE mahasiswa SET nama = ?, tempat_lahir = ?, tanggal_lahir = ?, jurusan = ?, program_studi = ?, ipk = ? WHERE nim = ?");
        $stmt->bind_param("ssssssd", $nama, $tempat_lahir, $tanggal_lahir, $jurusan, $program_studi, $ipk, $nim);
        if ($stmt->execute()) {
            return "Data berhasil diperbarui.";
        } else {
            return "Error: " . $stmt->error;
        }
    }

    public function delete($nim)
    {
        $stmt = $this->conn->prepare("DELETE FROM mahasiswa WHERE nim = ?");
        $stmt->bind_param("i", $nim);
        if ($stmt->execute()) {
            return "Data berhasil dihapus.";
        } else {
            return "Error: " . $stmt->error;
        }
    }
}
