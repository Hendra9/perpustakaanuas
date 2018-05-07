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

<h3>Data anggota</h3>
 
<a href="inputanggota.php">Input Data anggota</a>
<table border="1">
	<tr>
		<th>No</th>
		<th>nim</th>
		<th>nama</th>
		<th>tempat lahir</th>
		<th>tanggal lahir</th>
		<th>jenis kelamin</th>
		<th>prodi</th>
		<th>tahun masuk</th>
	</tr>
	<a href="home.php">----------------------------------------------------------------------------->>>kembali</a>
	<?php
	$no = 1;
	foreach($db->tampil_data_anggota() as $x){
	?>
	<tr>
		<td><?php echo $no++; ?></td>
		<td><?php echo $x['nim']; ?></td>
		<td><?php echo $x['nama']; ?></td>
		<td><?php echo $x['tempat_lahir']; ?></td>
		<td><?php echo $x['tgl_lahir']; ?></td>
		<td><?php echo $x['jk']; ?></td>
		<td><?php echo $x['prodi']; ?></td>
		<td><?php echo $x['thn_masuk']; ?></td>
		<td>
			<a href="editanggota.php?nim=<?php echo $x['nim']; ?>&aksi=editanggota">Edit</a>
			<a href="proses.php?nim=<?php echo $x['nim']; ?>&aksi=hapusanggota">Hapus</a>			
		</td>
	</tr>
	<?php 
	}
	?>
	
</table>

