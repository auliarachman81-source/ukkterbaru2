<?php
session_start();
include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];
$query = mysqli_query($koneksi, "SELECT * FROM tbuser WHERE username='$username' AND password = '$password'");
$data = mysqli_fetch_assoc($query);

if ($data) {
    $_SESSION['iduser'] = $data['id'];
    $_SESSION['username'] = $data['username'];
    $_SESSION['password'] = $data['password'];

    if ($data['role'] == 'admin') {
        header("location:admin.php");
    } elseif ($data['role'] == 'siswa') {
        header("location:siswa.php");
    }
} else {
    echo "login gagal";
}
