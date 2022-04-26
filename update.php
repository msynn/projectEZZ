<?php
include('database/koneksi.php');
$select = mysqli_query($conn, "SELECT * FROM data_mhs WHERE nim = '" . $_GET['nim'] . "'");
$data = mysqli_fetch_array($select);
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Belajar PHP Mysql</title>
</head>

<body class="">
    <div class="container">
        <div class="row justify-content-center mt-4">
            <div class="col-lg-5 col-md-6 col-sm-6">

                <form action="" method="post" class="position-relative form-control border border-danger mt-3 p-5">
                    <h2 class="alert alert-primary text-center">Update Data Mahasiswa</h2>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Nama</label>
                        <input value="<?php echo $data['nama']  ?>" type="text" name="nama" class="form-control border-primary" id="exampleInputPassword1" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Jurusan</label>
                        <input value="<?php echo $data['jurusan']  ?>" type="text" name="jurusan" class="form-control border-primary" id="exampleInputPassword1" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Angkatan</label>
                        <input value="<?php echo $data['email']  ?>" type="text" name="email" class="form-control border-primary" id="exampleInputPassword1" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">nomor HP/WA</label>
                        <input value="<?php echo $data['wa']  ?>" type="text" name="wa" class="form-control border-primary" id="exampleInputPassword1" required>
                    </div>
                    <button name="update" type="submit" class="btn btn-primary mt-3">Save Data</button>
                </form>
                <?php
                if (isset($_POST['update'])) {
                    $update = mysqli_query($conn, "UPDATE data_mhs SET nim = '" . $_GET['nim'] . "', nama = '" . $_POST['nama'] . "', jurusan = '" . $_POST['jurusan'] . "', email = '" . $_POST['email'] . "', wa = '" . $_POST['wa'] . "'");
                    echo ("<script>
    alert('Data Berhasil Di Update');
    window.location = 'index.php';
    </script>");
                }

                ?>
            </div>
        </div>
    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>