<?php 
include "database.php";
$db = new database();
 
 //proses terjadi nya input buku
$aksi = $_GET['aksi'];
 if($aksi == "tambah"){
 	$db->input($_POST['judul'],$_POST['pengarang'],$_POST['penerbit'],$_POST['thn_terbit'],$_POST['jumlah_buku'],$_POST['lokasi']);
 	header("location:tampil.php");
 }elseif($aksi == "hapus"){ 	
 	$db->hapus($_GET['id']);
	header("location:tampil.php");
 }elseif($aksi == "update"){
 	$db->update($_POST['id'],$_POST['judul'],$_POST['pengarang'],$_POST['penerbit'],$_POST['thn_terbit'],$_POST['jumlah_buku'],$_POST['lokasi']);
 	header("location:tampil.php");
 }
 
 $aksi = $_GET['aksi'];
 if($aksi == "tambahan"){
 	$db->inputanggota($_POST['nim'],$_POST['nama'],$_POST['tempat_lahir'],$_POST['tgl_lahir'],$_POST['jk'],$_POST['prodi'],$_POST['thn_masuk']);
 	header("location:tampilanggota.php");
 }elseif($aksi == "hapusanggota"){ 	
 	$db->hapusanggota($_GET['nim']);
	header("location:tampilanggota.php");
 }elseif($aksi == "updateanggota"){
 	$db->updateanggota($_POST['nim'],$_POST['nama'],$_POST['tempat_lahir'],$_POST['tgl_lahir'],$_POST['jk'],$_POST['prodi'],$_POST['thn_masuk']);
 	header("location:tampilanggota.php");
 }
 
 $aksi = $_GET['aksi'];
 if($aksi == "tambahtrans"){
 	$db->inputtranssaksi($_POST['id'],$_POST['judul'],$_POST['nim'],$_POST['nama'],$_POST['tgl_pinjam'],$_POST['tgl_kembali'],$_POST['status']);
 	header("location:tampiltrans.php");
 }elseif($aksi == "hapustranssaksi"){ 	
 	$db->hapustranssaksi($_GET['id']);
	header("location:tampiltrans.php");
 }elseif($aksi == "updatetrans"){
 	$db->updatetranssaksi($_POST['id'],$_POST['judul'],$_POST['nim'],$_POST['nama'],$_POST['tgl_pinjam'],$_POST['tgl_kembali'],$_POST['status']);
 	header("location:tampiltrans.php");
 }
 
  $aksi = $_GET['aksi'];
 if($aksi == "tambahusers"){
 	$db->inputuser($_POST['id'],$_POST['username'],$_POST['password'],$_POST['nama'],$_POST['email'],$_POST['level']);
 	header("location:tampiluser.php");
 }elseif($aksi == "hapususers"){ 	
 	$db->hapususer($_GET['id']);
	header("location:tampiluser.php");
 }elseif($aksi == "updateusers"){
 	$db->updateuser($_POST['id'],$_POST['username'],$_POST['password'],$_POST['nama'],$_POST['email'],$_POST['level']);
 	header("location:tampiluser.php");
 }
?>