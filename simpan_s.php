<?php
require 'koneksi.php';
$data = array(
    'kd_suplier' => null,
    'nama'  => $_POST['nS'],
    'alamat' => $_POST['aS'],
    'telp' => $_POST['tS'],
);

$key = array_keys($data);

$val = array_values($data);

$sql = "INSERT INTO suplier(" . implode(', ', $key) . ") " . "VALUES ('" . implode("', '", $val) . "')";

mysqli_query($conn, $sql);

if ($sql) {
    echo 'Data berhasil disimpan <br/><a href="suplier.php">Kembali</a>';
} else {
    echo 'Error cuyy: ' . $sql . '<br>' . mysqli_error($conn);
}
mysqli_close($conn);
