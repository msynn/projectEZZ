<?php

include('database/koneksi.php');
$select = mysqli_query($conn, "SELECT * FROM data_mhs WHERE id = '" . $_GET['id'] . "'");
$data = mysqli_fetch_array($select);
?>
<?php
if (isset($_POST['update'])) {
    $update = mysqli_query($conn, "UPDATE data_mhs SET id = '" . $_GET['id'] . "', nama = '" . $_POST['nama'] . "', jurusan = '" . $_POST['jurusan'] . "', email = '" . $_POST['email'] . "', wa = '" . $_POST['wa'] . "' WHERE 1");

?>