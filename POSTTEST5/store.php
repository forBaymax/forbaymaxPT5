<?php 
require 'koneksi.php';
if(isset($_POST['input'])){
	$nama = $_POST['nama_barang'];
	$jenis =$_POST['jenis_barang'];
	$asalbrand = $_POST['asal_barang'];
	$tahun =$_POST['tahun_barang'];
	$harga =$_POST['harga_barang'];
}


	$input = "INSERT INTO barang (id_barang,nama_barang,jenis_barang,asal_barang,tahun_barang,harga_barang) VALUES('','$nama','$jenis','$asalbrand','$tahun','$harga')";
	$result = mysqli_query($con, $input);

	if($result){
		echo "
		<script>
			alert('Data Berhasil Di Tambahkan');
			document.location.href = 'test1.php';
		</script>";
		// header('location:test1.php?status= sukses');
	}else{
		echo"
		<script>
			alert('Data Tidak Berhasil Di Tambahkan');
			document.location.href = 'create.php';
		</script>";
		// header('location:ambil.php?status =sukses');

	}


 ?>