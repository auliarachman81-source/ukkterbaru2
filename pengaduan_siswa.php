<?php
session_start();
include 'koneksi.php';

$iduser = $_SESSION['iduser'];
$kategori = $_POST['idkategori'];
$lokasi = $_POST['lokasi'];
$keterangan = $_POST['keterangan'];
$status = 'proses';

$query = mysqli_query($koneksi, "INSERT INTO tbpengaduan (iduser, id_kategori,lokasi,keterangan,status) VALUES('$iduser','$kategori','$lokasi','$keterangan','$status')");

if ($query) {
    header("location:siswa.php");
} else {
    echo "DATA GAGAL";
}
