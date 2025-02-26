<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Dasboard</title>
</head>

<body>
    <h1 class="text-center">Selamat Datang di Halaman Index</h1>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Data Siswa
                    </div>
                    <div class="card-body">
                        <a href="tambah_siswa.php" class="btn btn-md btn-success md-1">Tambah Data</a>
                        <a href="tambah_siswa.php" class="btn btn-md btn-info md-1">Tambah Data <i class="bi bi-plus-circle"></i></a>

                            <table class="table table-bordered table-striped" id="myTable">

                            <thead>
                                <tr>
                                    <th scope="col">NO.</th>
                                    <th scope="col">NISN</th>
                                    <th scope="col">Nama Lengkap</th>
                                    <th scope="col">ALAMAT</th>
                                    <th scope="col">AKSI</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include("koneksi.php");
                                $no = 1;
                                $query = mysqli_query($connection, "SELECT * FROM tbl_siswa");
                                while ($row = mysqli_fetch_array($query)) {
                                ?>
                                    <tr>
                                        <td><?php echo $no++; ?></td>
                                        <td><?php echo $row['nisn']; ?></td>
                                        <td><?php echo $row['nama_lengkap']; ?></td>
                                        <td><?php echo $row['alamat']; ?></td>

                                        <td class="text-center align-middle">

                                            <div class="d-flex justify-content-between">
                                                <a href="edit_siswa.php?id=<?php echo $row['id_siswa']; ?>" class="btn btn-md btn-primary w-50 me-2">Edit <i class="bi bi-pencil"></i></a>
                                                <a href="hapus_siswa.php?id=<?php echo $row['id_siswa']; ?>" class="btn btn-md btn-danger w-50">Hapus <i class="bi bi-trash"></i></a>

                                            </div>

                                        </td>
                                    </tr>
                                <?php } ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>
