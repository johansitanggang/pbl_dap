<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "dompet_ap";
$koneksi = mysqli_connect($host, $user, $pass, $db);
if(!$koneksi){
    echo "gagal konek: " . die(mysqli_error($koneksi));
}
