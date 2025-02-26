<?php

include("koneksi.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nisn = $_POST['nisn'];
    $nama_lengkap = $_POST['nama_lengkap'];
    $alamat = $_POST['alamat'];

    // Prepare the SQL statement to prevent SQL injection
    $stmt = $connection->prepare("INSERT INTO tbl_siswa(nisn, nama_lengkap, alamat) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $nisn, $nama_lengkap, $alamat);

    if ($stmt->execute()) {
        header("Location: index.php");
    } else {
        echo "Data gagal disimpan: " . $stmt->error;
    }
    $stmt->close();
}

?>
