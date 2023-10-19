<?php 
require 'koneksi.php';

$id_barang = $_GET['id_barang'];

$result = mysqli_query($con, "DELETE FROM barang WHERE id_barang = $id_barang");

if($result){
		echo "
		<script>
			alert('Data Berhasil Di Hapus');
			document.location.href = 'indexAdmin.php';
		</script>";
		
		echo"
		<script>
			alert('Data Tidak Berhasil Di Hapus');
			document.location.href = 'indexAdmin.php';
		</script>";
		

}
?>


	
