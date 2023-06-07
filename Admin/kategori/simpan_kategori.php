<?php
include '../koneksi.php';
$id = $_POST['id'];
$kategori = $_POST['kategori'];
$standar = $_POST['standar'];
$keterangan= $_POST['keterangan'];
$kelengkapan = $_POST['kelengkapan'];
$input = mysqli_query($koneksi, "INSERT INTO kriteria
VALUES('$id','$kategori','$standar','$keterangan','$kelengkapan')") or die(mysql_error());
if ($input) {
    echo "Data Berhasil Disimpan";
    header("location:../index.php");
} else {
    echo "Gagal Disimpan";
}
?>