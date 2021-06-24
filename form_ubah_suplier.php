<?php
require 'koneksi.php';
$kd_suplier = $_REQUEST['kd_suplier'];
$sql = "SELECT * FROM suplier WHERE kd_suplier='$kd_suplier'";
$result = mysqli_query($conn, $sql);
foreach ($result as $rows) {
    $kd_suplier   = $rows['kd_suplier'];
    $nama  = $rows['nama'];
    $alamat = $rows['alamat'];
    $telp = $rows['telp'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Ubah</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Form Ubah Suplier</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="./index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./form_obat.php">Form Obat</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="./form_suplier.php">Form Suplier</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./obat.php">Obat</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./suplier.php">Suplier</a>
                    </li>

                </ul>

            </div>
        </div>
    </nav>
    <div class="row mt-5">
        <div class="col-2"></div>
        <div class="col-6">
            <div class="from-control">
                <form class="" action="ubah_s.php" method="post">
                    <div class="mb-3">
                        <label class="form-label">Kode Suplier</label>
                        <input type="text" class="form-control" name="kdS" value="<?= $kd_suplier; ?>" readonly>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nama</label>
                        <input type="text" class="form-control" name="nS" value="<?= $nama; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Alamat</label>
                        <input type="text" class="form-control" name="aS" value="<?= $alamat; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Telepon</label>
                        <input type="text" class="form-control" name="tS" value="<?= $telp; ?>">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</html>