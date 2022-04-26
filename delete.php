<?php 

	include './database/koneksi.php';

	if(isset($_GET['nim'])){

		$delete= mysqli_query($conn, "DELETE FROM data_mhs WHERE nim= '" . $_GET['nim'] . "'");
		if ($delete) {
			echo ("<script>
				alert('Data Berhasil dihapus');
				window.location = 'lihat-data.php';
				</script>");
		}
	}

?>