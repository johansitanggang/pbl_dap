<?php
// include database connection file
include '../koneksi.php';
$username = $_POST['username'];
$nama = $_POST['nama'];
$telepon = $_POST['telepon'];
$email = $_POST['email'];
$role = $_POST['role'];
$result = mysqli_query($koneksi, "UPDATE pengguna SET
username='$username',nama='$nama',telepon='$telepon',email='$email',role='$role' WHERE username='$username'");
// Redirect to homepage to display updated user in list
header("Location: ../index.php");
?>