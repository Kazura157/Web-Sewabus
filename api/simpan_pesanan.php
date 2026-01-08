<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $penjemputan = $_POST['penjemputan'];
    $tujuan      = $_POST['tujuan'];
    $unit        = $_POST['unit'];
    $nama        = $_POST['nama'];
    $wa          = $_POST['wa'];
    $catatan     = $_POST['catatan'];
    $metode      = $_POST['metode'];
    $total       = $_POST['total'];

    $query = "INSERT INTO pesanan (penjemputan, tujuan, unit_armada, nama_penyewa, whatsapp, catatan, metode_bayar, total_bayar) 
              VALUES ('$penjemputan', '$tujuan', '$unit', '$nama', '$wa', '$catatan', '$metode', '$total')";

    if (mysqli_query($koneksi, $query)) {
        echo "Sukses";
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }
}
?>