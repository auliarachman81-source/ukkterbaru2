<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php include 'navbar.php'; ?>
    <?php include 'koneksi.php';
    $no = 1;
    $query = mysqli_query($koneksi, "SELECT tbpengaduan.*, tbkategori.nama_kategori
                                        FROM tbpengaduan
                                        LEFT JOIN tbkategori ON
                                        tbpengaduan.id_kategori = tbkategori.idkategori
                                        WHERE tbpengaduan.id_pengaduan = '$no'");
    while ($data = mysqli_fetch_assoc($query)) {
    ?>
        <h2>Detail Pengaduan</h2>

        <p><b>ID Kategori:</b> <?= $data['id_kategori']; ?></p>
        <p><b>Nama Kategori:</b> <?= $data['nama_kategori']; ?></p>
        <p><b>Lokasi:</b> <?= $data['lokasi']; ?></p>
        <p><b>Keterangan:</b> <?= $data['keterangan']; ?></p>
        <p><b>Status:</b> <?= $data['status']; ?></p>

        <a href="data_aspirasi.php">← Kembali</a>
    <?php } ?>
</body>

</html>