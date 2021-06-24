<?php require 'koneksi.php';
$data = array(
    'nama'  => $_POST['nS'],
    'alamat' => $_POST['aS'],
    'telp' => $_POST['tS'],
);
$where = $_POST['kdS'];
$cols = array();

foreach ($data as $key => $val) {
    $cols[] = "$key = '$val'";
}

$sql = "UPDATE suplier SET " . implode(',', $cols) . "WHERE kd_suplier=" . $where;
mysqli_query($conn, $sql);
if ($sql) {
    echo 'Data berhasil diubah <br/><a href="suplier.php">Kembali</a>';
} else {
    echo 'Error cuyy: ' . $sql . '<br>' . mysqli_error($conn);
}

mysqli_close($conn);
