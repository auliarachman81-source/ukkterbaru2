<?php include 'navbar.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Siswa</title>
</head>

<body>
    <form action="pengaduan_siswa.php" method="post">
        <div class="form_pengaduan">
            <label>Kategori</label><br>
            <?php
            include 'koneksi.php';
            $query = mysqli_query($koneksi, "SELECT * FROM tbkategori");
            ?>
            <select name="idkategori">
                <?php while ($data = mysqli_fetch_assoc($query)) { ?>
                    <option value="<?= $data['idkategori']; ?>"><?= $data['nama_kategori']; ?></option>
                <?php } ?>
                <select><br>
                    <label>Lokasi</label><br>
                    <input type="text" name="lokasi"><br>
                    <label>Keterangan</label><br>
                    <input type="text" name="keterangan"><br>
                    <button type="submit"> KIRIM</button>
        </div>
    </form>

    <?php include 'data_aspirasi.php' ?>

</body>

</html>