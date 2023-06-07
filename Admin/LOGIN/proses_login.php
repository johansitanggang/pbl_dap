<?php
session_start();
include 'koneksi.php';
$username = $_POST['username'];
$password = $_POST['password'];
// Cek apakah username dan password telah diisi
if (empty($username) || empty($password)) {
    header("Location: login.php?error=emptyfields");
    exit();
}
// Kueri untuk memeriksa username dan password di tabel login
$data = mysqli_query($koneksi, "SELECT * FROM pengguna WHERE username='$username' AND
password='$password'");
// Cek apakah kueri menghasilkan satu baris data
if (mysqli_num_rows($data) > 0) {
    $row = mysqli_fetch_array($data);
    // Jika berhasil, buat session dan redirect ke halaman dashboard
    $_SESSION['username'] = $row['username'];
    header("Location: ../index.php");
    exit();
} else {
    // Jika gagal, redirect ke halaman login dengan pesan error
    header("Location: login.php?error=invalidlogin");
    exit();
}

?>