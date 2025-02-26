<?php

include("koneksi.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_siswa = $_POST['id_siswa'];
    $nisn = $_POST['nisn'];
    $nama_lengkap = $_POST['nama_lengkap'];
    $alamat = $_POST['alamat'];

    $query = "UPDATE tbl_siswa SET nisn='$nisn', nama_lengkap='$nama_lengkap', alamat='$alamat' WHERE id_siswa='$id_siswa'";
    
    if (mysqli_query($connection, $query)) {
        header("location:index.php");

    } else {
        echo "Error updating record: " . mysqli_error($connection);
    }
}

?>
