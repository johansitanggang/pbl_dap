<?php
// include database connection file
include '../koneksi.php';
$username = $_GET['username'];
$result = mysqli_query($koneksi, "DELETE FROM pengguna WHERE username='$username'");
header("Location:../index.php");
?>