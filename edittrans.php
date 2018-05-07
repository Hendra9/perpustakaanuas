<?php 
include "database.php";
$db = new database();
?>
 
<h3>Edit Data transsaksi</h3>
 
<form action="proses.php?aksi=updatetrans" method="post">
<?php
foreach($db->edittranssaksi($_GET['id']) as $d){
?>
<table>
	<tr>
		<td>Id</td>
		<td>
			<input type="hidden" name="id" value="<?php echo $d['id'] ?>">
			<input type="text" name="judul" value="<?php echo $d['judul'] ?>">
		</td>
	</tr>
	<tr>
		<td>Nim</td>
		<td><input type="text" name="nim" value="<?php echo $d['nim'] ?>"></td>
	</tr>
	<tr>
		<td>Nama</td>
		<td><input type="text" name="nama" value="<?php echo $d['nama'] ?>"></td>
	</tr>
	<tr>
		<td>Tanggal pinjam</td>
		<td><input type="text" name="tgl_pinjam" value="<?php echo $d['tgl_pinjam'] ?>"></td>
	</tr>
	<tr>
		<td>Tanggal kembali</td>
		<td><input type="text" name="tgl_kembali" value="<?php echo $d['tgl_kembali'] ?>"></td>
	</tr>
	<tr>
		<td>Status</td>
		<td><input type="text" name="status" value="<?php echo $d['status'] ?>"></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" value="Simpan"></td>
	</tr>
</table>
<?php } ?>
</form>