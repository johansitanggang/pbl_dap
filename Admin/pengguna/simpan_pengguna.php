<?php
include '../koneksi.php';
$username = $_POST['username'];
$password = $_POST['password'];
$nama = $_POST['nama'];
$telepon = $_POST['telepon'];
$email = $_POST['email'];
$role = $_POST['role'];
$input = mysqli_query($koneksi, "INSERT INTO pengguna
VALUES('$username','$password','$nama','$telepon','$email','$role')") or die(mysql_error());
if ($input) {
    echo "Data Berhasil Disimpan";
    header("location:../index.php");
} else {
    echo "Gagal Disimpan";
}
?>