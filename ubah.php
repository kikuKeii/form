<?php require 'koneksi.php';
$data = array(
    'nama'  => $_POST['nO'],
    'kategori' => $_POST['kategori'],
    'harga' => $_POST['hO'],
    'stok' => $_POST['sO'],
    'kd_suplier' => $_POST['kd_suplier'],
);
$where = $_POST['idO'];
$cols = array();

foreach ($data as $key => $val) {
    $cols[] = "$key = '$val'";
}

$sql = "UPDATE obat SET " . implode(',', $cols) . "WHERE id=" . $where;
mysqli_query($conn, $sql);
if ($sql) {
    echo 'Data berhasil diubah <br/><a href="obat.php">Kembali</a>';
} else {
    echo 'Error cuyy: ' . $sql . '<br>' . mysqli_error($conn);
}

mysqli_close($conn);
