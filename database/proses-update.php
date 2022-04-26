<?php 

    include 'database/koneksi.php';
    $nim = $_GET['updatenim'];
    $sql = "SELECT * FROM `data_mhs` WHERE nim = $nim"

    if (isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $jurusan = $_POST['jurusan'];
        $email = $_POST['email'];
        $wa = $_POST['wa'];

        $sql = "UPDATE `data_mhs` SET `nim`=$nim,`nama`='$nama',`jurusan`='$jurusan',`email`='$email',`wa`='$wa' WHERE nim = $nim";
        $result = mysqli_query($conn,$sql);
        if ($result) {
            echo "Update Succesfully";
        }
    }
?>
