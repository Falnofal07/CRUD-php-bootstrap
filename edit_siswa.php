<?php

include("koneksi.php");

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = mysqli_query($connection,"SELECT * FROM tbl_siswa where id_siswa='$id'");
    $data = mysqli_fetch_array($query);
} else{
    echo "ID not found";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Edit Siswa</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Edit Siswa
                    </div>
                    <div class="card-body">
                        <form action="update_siswa.php" method="post" class="needs-validation" novalidate>

                            <div class="form-group">
                                <label>NISN</label>
                                <input type="text" name="nisn" value="<?php echo $data['nisn'] ?>" placeholder="Masukan NISN" class="form-control" required>
                                <input type="hidden" name="id_siswa" value="<?php echo $data['id_siswa'] ?>">
                            </div>
                            <div class="form-group">
                                <label>Nama Lengkap</label>
                                <input type="text" name="nama_lengkap" value="<?php echo $data['nama_lengkap'] ?>" class="form-control" placeholder="Masukan Nama Lengkap" required>
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <textarea name="alamat" placeholder="Masukan alamat Siswa" rows="3" class="form-control" required><?php echo $data['alamat'] ?></textarea>
                            </div>
                            <div class="d-flex justify-content-between">
                                <button type="submit" class="btn btn-primary">Simpan <i class="bi bi-save"></i></button>
                                <button type="reset" class="btn btn-warning">Reset <i class="bi bi-arrow-counterclockwise"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
