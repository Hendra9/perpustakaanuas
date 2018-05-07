<?php 
include "database.php";

$db = new database();
?>

<html>
<head>
	<title>Selamat Datang di aplikasi perpustakkan</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	
	<!-- bagian header template -->
	<header>
		<h1 class="judul">Perpustakaan</h1>
		<p class="deskripsi">Selamat Datang Di Aplikasi Perpustakaan</p>
	</header>

<h3>Data buku</h3>
 
<a href="inputuser.php">Input Data</a>
<table border="1">
	<tr>
		<th>No</th>
		<th>Usernamae</th>
		<th>Password</th>
		<th>Nama</th>
		<th>Email</th>
		<th>Level</th>
	</tr>
	<a href="home.php">----------------------------------------------------------------------------->>>kembali</a>
	<?php
	$no = 1;
	foreach($db->tampil_data_user() as $x){
	?>
	<tr>
		<td><?php echo $no++; ?></td>
		<td><?php echo $x['username']; ?></td>
		<td><?php echo $x['password']; ?></td>
		<td><?php echo $x['nama']; ?></td>
		<td><?php echo $x['email']; ?></td>
		<td><?php echo $x['level']; ?></td>
		<td>
			<a href="edituser.php?id=<?php echo $x['id']; ?>&aksi=edituser">Edit</a>
			<a href="proses.php?id=<?php echo $x['id']; ?>&aksi=hapususers">Hapus</a>			
		</td>
	</tr>
	<?php 
	}
	?>
			
		
</table>

