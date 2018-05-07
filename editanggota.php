<?php 
include "database.php";
$db = new database();
?>
 
<h3>Edit Data anggota</h3>
 
<form action="proses.php?aksi=updateanggota" method="post">
<?php
foreach($db->editanggota($_GET['nim']) as $d){
?>
<table>
	<tr>
		<td>Nim</td>
		<td>
			<input type="hidden" name="nim" value="<?php echo $d['nim'] ?>">
			<input type="text" name="nama" value="<?php echo $d['nama'] ?>">
		</td>
	</tr>
	<tr>
		<td>Tempat lahir</td>
		<td><input type="text" name="tempat_lahir" value="<?php echo $d['tempat_lahir'] ?>"></td>
	</tr>
	<tr>
		<td>Tanggal lahir</td>
		<td><input type="text" name="tgl_lahir" value="<?php echo $d['tgl_lahir'] ?>"></td>
	</tr>
	<tr>
		<td>Jenis kelamin</td>
		<td><input type="text" name="jk" value="<?php echo $d['jk'] ?>"></td>
	</tr>
	<tr>
		<td>Prodi</td>
		<td><input type="text" name="prodi" value="<?php echo $d['prodi'] ?>"></td>
	</tr>
	<tr>
		<td>Tahun masuk</td>
		<td><input type="text" name="thn_masuk" value="<?php echo $d['thn_masuk'] ?>"></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" value="Simpan"></td>
	</tr>
</table>
<?php } ?>
</form>