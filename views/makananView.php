<h2 style="margin-bottom: 20px; color: #a8e6cf;">Daftar Makanan Indonesia</h2>

<table width="600">
<tr>
<td colspan="4" style="text-align: center;">
    <a href="?page=makananAdd" style="text-decoration: none;">[+] Tambah Data Baru</a>
</td>
</tr>
</table>
<table id="makananTable" class="table table-striped table-bordered">
<thead>
<tr>
<th>No</th>
<th>Nama Makanan</th>
<th>Daerah Makanan</th>
<th>Keterangan</th>
<th>Aksi</th>
</tr>
</thead>
<tbody>
<?php
include "includes/config.php";
$query = "SELECT * FROM tbl_makanan ORDER BY id_makanan ASC";
$sql = mysqli_query($conn, $query);
$nomor = 1;
while ($data = mysqli_fetch_array($sql)) { ?>
<tr>
<td style="text-align: center;"><?= $nomor++; ?></td>
<td><?= $data["nama_makanan"] ?></td>
<td><?= $data["daerah_makanan"] ?></td>
<td><?= $data["keterangan"] ?></td> <!-- Kolom Keterangan -->
<td style="text-align: center;">
    <a href="?page=makananUpdate&id=<?= $data['id_makanan']; ?>" style="text-decoration: none;">Edit</a> |
    <a href="?page=makananDelete&id=<?= $data['id_makanan']; ?>" onclick="return confirm('Yakin ingin menghapus data ini ?');" style="text-decoration: none;">Hapus</a>
</td>
</tr>
<?php } ?>
</table>
<table width="600">
</table>