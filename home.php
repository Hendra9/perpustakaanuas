
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
	<!-- akhir bagian header template -->
	
	<div class="wrap">
		<!-- bagian menu		 -->
		<nav class="menu">
			<ul>
				<li>
					<a href="index.php">Home</a>
				</li>
				<li>
					<a href="tampil.php">Buku</a>
				</li>
				<li>
					<a href="tampilanggota.php">Anggota</a>
				</li>
				<li>
					<a href="tampiltrans.php">Transaksi</a>
				</li>
				<li>
					<a href="tampiluser.php">User</a>
				</li>
				<li>
					<a href="upload_gambar.php">UploadBuku</a>
				</li>
				<li>
					<a href="logout.php">Logout</a>
				</li>
			</ul>
		</nav>
		<!-- akhir bagian menu -->
 
		<!-- bagian sidebar website -->
		<aside class="sidebar">
			<div class="widget">
				<h2>HII</h2>
				<p>Selamat datang di www.perpustakaan.com, situs ini menyediakan peminjaman buku.</p>
			</div>
			<div class="widget">
				<h2>Ebook Gratis</h2>
				<p>Teman-teman bisa Mmeminjam buku di sini <a target="_blank" href="inputtrans.php">www.pinjambuku.com</a>.</p>
			</div>
		</aside>
		<!-- akhir bagian sidebar website -->
 
		<!-- bagian konten Blog -->
		<div class="blog">
			<div class="conteudo">
				<div class="post-info">
					Di Posting Oleh <b>Hendra deni</b>
				</div>
				<img src="pustaka.jpg">
				<h1> Silahakan klik untuk menambahkan data buku baru </h1>
				<hr>
				<p>
				
				</p>				
				<a href="input.php" class="continue-lendo">Selengkapnya →</a>
			</div>
			<div class="conteudo">
				<div class="post-info">
					Di Posting Oleh <b>Nur gibar</b>
				</div>
				<img src="anggota.jpg">
				<h1> Silahkan klik untuk menambhkan data anggota baru </h1>
				<hr>
				<p>

				</p>				
				<a href="inputanggota.php" class="continue-lendo">Selengkapnya →</a>
			</div>
		</div>
		<!-- akhir bagian konten Blog -->
	</div>
 
</body>
</html>