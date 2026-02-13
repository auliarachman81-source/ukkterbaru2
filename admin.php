<?php include 'navbar.php'; ?>

<h2>Data Pengaduan</h2>

<table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>No</th>
        <th>ID Kategori</th>
        <th>Nama Kategori</th>
        <th>Lokasi</th>
        <th>Keterangan</th>
        <th>Status</th>
        <th>Detail</th>
    </tr>

    <?php

    include 'koneksi.php';
    $no = 1;

    $query = mysqli_query($koneksi, "SELECT tbpengaduan.*, tbkategori.nama_kategori
                                     FROM tbpengaduan
                                     LEFT JOIN tbkategori 
                                     ON tbpengaduan.id_kategori = tbkategori.idkategori");

    while ($data = mysqli_fetch_assoc($query)) {
    ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= $data['id_kategori'] ?></td>
            <td><?= $data['nama_kategori'] ?></td>
            <td><?= $data['lokasi'] ?></td>
            <td><?= $data['keterangan'] ?></td>
            <td><?= $data['status'] ?></td>
            <td>
                <a href="detail_pengaduan.php?id=<?= $data['idpengaduan'] ?>">
                    <button>Detail</button>
                </a>
            </td>
        </tr>
    <?php } ?>
</table>