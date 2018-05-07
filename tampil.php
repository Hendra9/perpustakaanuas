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
 
<a href="input.php">Input Data</a>
<table border="1">
	<tr>
		<th>No</th>
		<th>Judul</th>
		<th>pengarang</th>
		<th>penerbit</th>
		<th>Tahun terbit</th>
		<th>Jumblah buku</th>
		<th>lokasi</th>
	</tr>
	<a href="home.php">----------------------------------------------------------------------------->>>kembali</a>
	<?php
	$no = 1;
	foreach($db->tampil_data() as $x){
	?>
	<tr>
		<td><?php echo $no++; ?></td>
		<td><?php echo $x['judul']; ?></td>
		<td><?php echo $x['pengarang']; ?></td>
		<td><?php echo $x['penerbit']; ?></td>
		<td><?php echo $x['thn_terbit']; ?></td>
		<td><?php echo $x['jumlah_buku']; ?></td>
		<td><?php echo $x['lokasi']; ?></td>
		<td>
			<a href="edit.php?id=<?php echo $x['id']; ?>&aksi=edit">Edit</a>
			<a href="proses.php?id=<?php echo $x['id']; ?>&aksi=hapus">Hapus</a>			
		</td>
	</tr>
	<?php 
	}
	?>
			
		
</table>

