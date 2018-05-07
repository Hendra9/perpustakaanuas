<?php 
include "database.php";
$db = new database();
?>
 
<h3>Edit Data buku</h3>
 
<form action="proses.php?aksi=update" method="post">
<?php
foreach($db->edit($_GET['id']) as $d){
?>
<table>
	<tr>
		<td>Judul</td>
		<td>
			<input type="hidden" name="id" value="<?php echo $d['id'] ?>">
			<input type="text" name="judul" value="<?php echo $d['judul'] ?>">
		</td>
	</tr>
	<tr>
		<td>Pengarang</td>
		<td><input type="text" name="pengarang" value="<?php echo $d['pengarang'] ?>"></td>
	</tr>
	<tr>
		<td>Penerbit</td>
		<td><input type="text" name="penerbit" value="<?php echo $d['penerbit'] ?>"></td>
	</tr>
	<tr>
		<td>Tahun terbit</td>
		<td><input type="text" name="thn_terbit" value="<?php echo $d['thn_terbit'] ?>"></td>
	</tr>
	<tr>
		<td>Jumlah buku</td>
		<td><input type="text" name="jumlah_buku" value="<?php echo $d['jumlah_buku'] ?>"></td>
	</tr>
	<tr>
		<td>Lokasi</td>
		<td><input type="text" name="lokasi" value="<?php echo $d['lokasi'] ?>"></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" value="Simpan"></td>
	</tr>
</table>
<?php } ?>
</form>