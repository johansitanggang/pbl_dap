<?php
// include database connection file
include '../koneksi.php';
$id = $_GET['id'];
$result = mysqli_query($koneksi, "DELETE FROM kriteria WHERE id='$id'");
header("Location:../index.php");
?>