<?php
// include database connection file
include '../koneksi.php';
$id = $_POST['id'];
$kategori = $_POST['kategori'];
$standar = $_POST['standar'];
$keterangan = $_POST['keterangan'];
$kelengkapan = $_POST['kelengkapan'];
$result = mysqli_query($koneksi, "UPDATE kriteria SET
kategori='$kategori',standar='$standar',keterangan='$keterangan',kelengkapan='$kelengkapan' WHERE id='$id'");
// Redirect to homepage to display updated user in list
header("Location: ../index.php");
?>