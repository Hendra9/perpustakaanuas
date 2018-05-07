<?php 
include "database.php";
$db = new database();
?>
 
<h3>Edit Data transsaksi</h3>
 
<form action="proses.php?aksi=updateusers" method="post">
<?php
foreach($db->edituser($_GET['id']) as $d){
?>
<table>
	<tr>
		<td>Id</td>
		<td>
			<input type="hidden" name="id" value="<?php echo $d['id'] ?>">
			<input type="text" name="username" value="<?php echo $d['username'] ?>">
		</td>
	</tr>
	<tr>
		<td>Password</td>
		<td><input type="text" name="password" value="<?php echo $d['password'] ?>"></td>
	</tr>
	<tr>
		<td>Nama</td>
		<td><input type="text" name="nama" value="<?php echo $d['nama'] ?>"></td>
	</tr>
	<tr>
		<td>Email</td>
		<td><input type="text" name="email" value="<?php echo $d['email'] ?>"></td>
	</tr>
	<tr>
		<td>Level</td>
		<td><input type="text" name="level" value="<?php echo $d['level'] ?>"></td>
	</tr>
	
	<tr>
		<td></td>
		<td><input type="submit" value="Simpan"></td>
	</tr>
</table>
<?php } ?>
</form>