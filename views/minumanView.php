<h2 style="margin-bottom: 20px; color: #a8e6cf; ">Daftar Minuman Indonesia</h2>
<table width="600">
<tr>
<td colspan="4" style="text-align: center;">
    <a href="?page=minumanAdd" style="text-decoration: none;">[+] Tambah Data Baru</a>
</td>
</tr>
</table>
<table id="minumanTable" class="table table-striped table-bordered">
<thead>
<tr>
<th>No</th>
<th>Nama Minuman</th>
<th>Daerah Minuman</th>
<th>Keterangan</th>
<th>Aksi</th>
</tr>
</thead>
<tbody>
<?php
include "includes/config.php";
$query = "SELECT * FROM tbl_minuman ORDER BY id_minuman ASC";
$sql = mysqli_query($conn, $query);
$nomor = 1;
while ($data = mysqli_fetch_array($sql)) { ?>
<tr>
<td style="text-align: center;"><?= $nomor++; ?></td>
<td><?= $data["nama_minuman"] ?></td>
<td><?= $data["daerah_minuman"] ?></td>
<td><?= $data["keterangan"] ?></td> <!-- Kolom Keterangan -->
<td style="text-align: center;">
    <a href="?page=minumanUpdate&id=<?= $data['id_minuman']; ?>" style="text-decoration: none;">Edit</a> |
    <a href="?page=minumanDelete&id=<?= $data['id_minuman']; ?>" onclick="return confirm('Yakin ingin menghapus data ini ?');" style="text-decoration: none;">Hapus</a>
</td>
</tr>
<?php } ?>
</table>
<table width="600">
</table>