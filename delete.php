<?php 
// Include database connection file
	include './database/koneksi.php';

// mengecek data dari ID melewati URL
	if(isset($_GET['id'])){

		$delete= mysqli_query($conn, "DELETE FROM data_mhs WHERE id= '" . $_GET['id'] . "'");
		if ($delete) {
			echo ("<script>
				alert('Data Berhasil dihapus');
				window.location = 'lihat-data.php';
				</script>");
		}
	}

?>