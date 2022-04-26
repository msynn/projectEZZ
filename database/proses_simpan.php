<?php 

	$id			= $_POST['id'];
	$nama 		= $_POST['nama'];
	$jurusan	= $_POST['jurusan'];
	$email 		= $_POST['email'];
	$wa 		= $_POST['wa'];

	include 'koneksi.php';
// Memasukkan Data
  $sql = "INSERT INTO data_mhs VALUES ('$id', '$nama', '$jurusan', '$email', '$wa')";

  if (mysqli_query($conn, $sql)) {
    echo "Data Berhasil disimpan!";
    echo "<br>";
    echo "<a href='../input-data.php'>Kembali</a>";
  }else{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
?>
