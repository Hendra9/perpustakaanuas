<?php
include "koneksi.php";
$message = '';
if (isset($_POST['upload'])) {
	$keterangan = $_POST['keterangan'];
	require_once('proses_upload.php');
}
?>

<html>
<head>
	<title>Upload Gambar </title>
</head>
<body>
<?php echo $message; ?>

<form action="proses_upload.php" method="post" enctype="multipart/form-data" accept="image/jpg">
	<label>Pilih gambar</label>
	<input type="file" name="photo" required>
	<br>
	<label>Keterangan</label>
	<textarea type="text" name="keterangan"></textarea>
	<br>
	<button type="submit" name="upload">Upload</button>
</form>


</body>
</html>