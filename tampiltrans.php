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

<h3>Data transsaksi</h3>
 
<a href="inputtrans.php">Input Data transsaksi</a>
<table border="1">
	<tr>
		<th>No</th>
		<th>Id</th>
		<th>Judul</th>
		<th>Nim</th>
		<th>Nama</th>
		<th>Tanggal pinjam</th>
		<th>Tanggal kembali</th>
		<th>Status</th>
	</tr>
	<a href="home.php">----------------------------------------------------------------------------->>>kembali</a>
	<?php
	$no = 1;
	foreach($db->tampil_data_transsaksi() as $x){
	?>
	<tr>
		<td><?php echo $no++; ?></td>
		<td><?php echo $x['id']; ?></td>
		<td><?php echo $x['judul']; ?></td>
		<td><?php echo $x['nim']; ?></td>
		<td><?php echo $x['nama']; ?></td>
		<td><?php echo $x['tgl_pinjam']; ?></td>
		<td><?php echo $x['tgl_kembali']; ?></td>
		<td><?php echo $x['status']; ?></td>
		<td>
			<a href="edittrans.php?id=<?php echo $x['id']; ?>&aksi=edittranssaksi">Edit</a>
			<a href="proses.php?id=<?php echo $x['id']; ?>&aksi=hapustranssaksi">Hapus</a>			
		</td>
	</tr>
	<?php 
	}
	?>
	
</table>

