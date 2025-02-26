<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Input Siswa</title>
</head>

<body>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-sm-4">
                <form action="" method="post" class="border rounded text-light p-2 bg-dark bg-opacity-75">
    <h5 class="rounded bg-dark text-center p-2">Silahkan Masukan Identitas Siswa</h5>

                    <label class="form-label pt-2">NISN :</label>
                    <input type="text" name="nisn" class="form-control" placeholder="Masukan NISN " required>


                    <label class="form-label pt-2">Nama Siswa :</label>
                    <input type="text" name="nama_lengkap" class="form-control" placeholder="Masukan Nama Siswa" required>


                    <label class="form-label pt-2">Alamat :</label>
                    <textarea name="alamat" rows="3" class="form-control mb-3" placeholder="Masukan alamat"></textarea>
                    <div class="d-flex justify-content-between">
                    <button type="submit" class="btn btn-success w-50 p-2 me-2">Simpan <i class="bi bi-save"></i></button>

                    <button type="reset" class="btn btn-danger w-50 p-2 ">Reset <i class="bi bi-arrow-counterclockwise"></i></button>

                    </div>
            </div>
        </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
