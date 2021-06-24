<?php
require 'koneksi.php';
$data = array(
    'id' => null,
    'nama'  => $_POST['nO'],
    'kategori' => $_POST['kategori'],
    'harga' => $_POST['hO'],
    'stok' => $_POST['sO'],
    'kd_suplier' => $_POST['kd_suplier'],
);

$key = array_keys($data);

$val = array_values($data);

$sql = "INSERT INTO obat(" . implode(', ', $key) . ") " . "VALUES ('" . implode("', '", $val) . "')";

mysqli_query($conn, $sql);

if ($sql) {
    echo 'Data berhasil disimpan <br/><a href="obat.php">Kembali</a>';
} else {
    echo 'Error cuyy: ' . $sql . '<br>' . mysqli_error($conn);
}
mysqli_close($conn);
