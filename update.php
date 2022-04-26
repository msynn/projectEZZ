<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>belajar</title>
</head>
<body>
    <?php 
    include 'database/koneksi.php';
    $query = "SELECT * FROM data_mhs WHERE id =". $_GET['id'];
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) > 0) {
        while ($data = mysqli_fetch_assoc($result)) { ?>

            <form action="database/proses-update.php" method="POST">
                <p>Masukkan data baru :</p>
                <label>ID card</label>
                <input type="text" name="id" value="<?php echo $data['id']; ?> hidden='True'">
                <br><br>
                <label>Nama</label>
                <input type="text" name="nama" value="<?php echo ($data['nama']); ?>">
                <br><br>
                <label>Jurusan</label>
                <input type="text" name="jurusan" value="<?php echo ($data['jurusan']); ?>">
                <br><br>
                <label>Email</label>
                <input type="text" name="email" value="<?php echo ($data['email']); ?>">
                <label>WA</label>
                <input type="text" name="wa" value="<?php echo ($data['wa']); ?>">
            <?php}
        }?>
            <br><br>
        <input type="submit" name="simpan" value="simpan">
    </form>  
</body>
</html>