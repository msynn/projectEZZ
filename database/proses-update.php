<?php
// Variabel
$id = $_POST['id'];
$nama = $_POST['nama'];
$jurusan = $_POST['jurusan'];
$email = $_POST['email'];
$wa = $_POST['wa'];

// memasukkan koneksi database
include 'koneksi.php'

if (isset($_POST['simpan'])) {
    $query = "UPDATE data_mhs SET nama='". $nama ."',jurusan='". $jurusan ."',email='". $email ."',wa='". $wa ."' WHERE id = " . $id;

    if (mysqli_query($conn, $query)) {
        header("Location:../lihat-data.php");
        exit;
    }else{
        echo "Terjadi kesalahan query";
    }
}
?>