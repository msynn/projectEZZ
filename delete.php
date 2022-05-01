<?php 

// include data koneksi
include 'database/koneksi.php';

// mengecek data dari ID melewati URL
if (isset($_GET['id'])) {
	
	// proses menghapus
	$delete = mysqli_query($conn, "DELETE FROM `data_mhs` WHERE id=' " . $_GET['id'] . " '  ");

	// tampilan window jika barhasil menghapus
	if ($delete) {
		echo ("<script>
			alert('Data berhasil dihapus!');
			window.location = 'lihat-data.php';
			</script>");
	}
}

?>