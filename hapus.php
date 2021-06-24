<?php
require 'koneksi.php';
$id = $_REQUEST['id'];
$sql = mysqli_query($conn, "DELETE FROM obat WHERE id='$id'");
header("Location:index.php");
