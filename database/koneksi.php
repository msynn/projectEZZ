<?php 
    $servername = "127.0.0.1";
    $username = "root";
    $password = "";
    $dbname = "diamond_ml";

    // Membuat koneksi dengan database
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Mengecek apakah koneksi berhasil dibuat
    if(!$conn) {
        die("Connection Failed : " . mysqli_connect_error());
    }else{
        echo "";
    }
?>