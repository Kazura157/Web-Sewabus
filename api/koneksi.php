<?php
$host = "MASUKKAN_HOST_DARI_TIDB_ANDA";
$user = "MASUKKAN_USER_DARI_TIDB_ANDA";
$pass = "MASUKKAN_PASSWORD_YANG_BARU_DIGENERATE";
$db   = "test"; 
$port = 4000; // TiDB Cloud menggunakan port 4000

$koneksi = mysqli_connect($host, $user, $pass, $db, $port);

if (!$koneksi) { 
    die("Koneksi Cloud Gagal: " . mysqli_connect_error()); 
}
?>