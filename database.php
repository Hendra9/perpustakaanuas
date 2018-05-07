<?php 
 
class database{
 
	var $host = "localhost";
	var $uname = "root";
	var $pass = "";
	var $db = "data1";
 
	function __construct(){
		mysql_connect($this->host, $this->uname, $this->pass);
		mysql_select_db($this->db);
	}
 
	function tampil_data(){
		$data = mysql_query("select * from tbl_buku");
		while($d = mysql_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;
	}
	function input($judul,$pengarang,$penerbit,$thn_terbit,$jumlah_buku,$lokasi){
		mysql_query("insert into tbl_buku values('','$judul','$pengarang','$penerbit','$thn_terbit','$jumlah_buku','$lokasi')");
	}	
	function hapus($id){
		mysql_query("delete from tbl_buku where id='$id'");
	}
	function edit($id){
		$data = mysql_query("select * from tbl_buku where id='$id'");
		while($d = mysql_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;
	}
 
	function update($id,$judul,$pengarang,$penerbit,$thn_terbit,$jumlah_buku,$lokasi){
		mysql_query("update tbl_buku set judul='$judul',pengarang='$pengarang', penerbit='$penerbit', thn_terbit='$thn_terbit', jumlah_buku='$jumlah_buku', lokasi='$lokasi' where id='$id'");
	}
	
	

	//tampilan anggota
	function tampil_data_anggota(){
		$data = mysql_query("select * from tbl_anggota");
		while($d = mysql_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;
	}
	function inputanggota($nim,$nama,$tempat_lahir,$tgl_lahir,$jk,$prodi,$tahun_masuk){
		mysql_query("insert into tbl_anggota values('$nim','$nama','$tempat_lahir','$tgl_lahir','$jk','$prodi','thn_masuk')");
	}	
	function hapusanggota($nim){
		mysql_query("delete from tbl_anggota where nim='$nim'");
	}
		function editanggota($nim){
		$data = mysql_query("select * from tbl_anggota where nim='$nim'");
		while($d = mysql_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;
	}
	function updateanggota($nim,$nama,$tempat_lahir,$tgl_lahir,$jk,$prodi,$tahun_masuk){
		mysql_query("update tbl_anggota set nama='$nama', tempat_lahir='$tempat_lahir', tgl_lahir='$tgl_lahir', jk='$jk', prodi='$prodi' where nim='$nim'");
	}
	
	
	
	function tampil_data_transsaksi(){
		$data = mysql_query("select * from tbl_transsaksi");
		while($d = mysql_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;
	}
	function inputtranssaksi($id,$judul,$nim,$nama,$tgl_pinjam,$tgl_kembali,$status){
		mysql_query("insert into tbl_transsaksi values('$id','$judul','$nim','$nama','$tgl_pinjam','$tgl_kembali','$status')");
	}	
	function hapustranssaksi($id){
		mysql_query("delete from tbl_transsaksi where id='$id'");
	}
	
		function edittranssaksi($id){
		$data = mysql_query("select * from tbl_transsaksi where id='$id'");
		while($d = mysql_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;
	}
	function updatetranssaksi($id,$judul,$nim,$nama,$tgl_pinjam,$tgl_kembali,$status){
		mysql_query("update tbl_transsaksi set judul='$judul', nim='$nim', nama='$nama', tgl_pinjam='$tgl_pinjam', tgl_kembali='$tgl_kembali' where id='$id'");
	}
	
	
	
	function tampil_data_user(){
		$data = mysql_query("select * from users");
		while($d = mysql_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;
	}
	function inputuser($id,$username,$password,$nama,$email,$level){
		mysql_query("insert into users values('$id','$username','$password','$nama','$email','$level')");
	}
	function hapususer($id){
		mysql_query("delete from users where id='$id'");
	}	
	function edituser($id){
		$data = mysql_query("select * from users where id='$id'");
		while($d = mysql_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;
	}
	function updateuser($id,$username,$password,$nama,$email,$level){
		mysql_query("update users set username='$username', password='$password', nama='$nama', email='$email', level='$level' where id='$id'");
	}
	
		
}
?>