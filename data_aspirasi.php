<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<!-- DataTables CSS -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.8/css/jquery.dataTables.min.css">
<!-- DataTables JS -->
<script src="https://cdn.datatables.net/1.13.8/js/jquery.dataTables.min.js"></script>

<script>
    $(document).ready(function() {
        $('#tabel_pengaduan').DataTable({
            "language": {
                "search": "Cari:",
                "lengthMenu": "Tampilkan_MENU_data",
                "info": "Menampilkan_START_sampai_END_dari_TOTAL_data",
                "paginate": {
                    "next": "Selanjutnya",
                    "previous": "Sebelumnya"
                }
            }
        });
    });
</script>

<h2>Data Pengaduan</h2>

<table id="tabel_pengaduan" border="1" cellpading="10" cellspacing="0">
    <thead>
        <tr>
            <th>No</th>
            <th>ID Kategori</th>
            <th>Nama Kategori</th>
            <th>Lokasi</th>
            <th>Keterangan</th>
            <th>Status</th>
            <th>Feedback</th>
        </tr>
    </thead>
    <?php include 'koneksi.php';
    $no = 1;
    $query = mysqli_query($koneksi, "SELECT tbpengaduan.*, tbkategori.nama_kategori
                                      FROM tbpengaduan
                                      LEFT JOIN tbkategori ON
                                      tbpengaduan.id_kategori = tbkategori.idkategori");

    while ($data = mysqli_fetch_assoc($query)) {
    ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= $data['id_kategori'] ?></td>
            <td><?= $data['nama_kategori'] ?></td>
            <td><?= $data['lokasi'] ?></td>
            <td><?= $data['keterangan'] ?></td>
            <td><?= $data['status'] ?></td>
            <td><?= $data['feedback'] ?></td>
        </tr>
    <?php } ?>
</table>