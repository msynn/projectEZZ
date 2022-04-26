<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        button {
            height: 35px;
            font-weight: 100;
            width: 100px;
            margin-top: 5px;
        }
    </style>
</head>
<body>
    <center><h1>INPUT DATA PEMBELI</h1></center>
<table>
    <div class="row justify-content-center">
        <div class="col-md-4">
    <form action="database/proses_simpan.php" method="POST">
        <div class="col-mb-3">
            <label for="nim" class="form-label">Nim</label>
            <input type="text" class="form-control" name="nim" id="nim" aria-describedby="nim" placeholder="Masukkan nim anda">
        </div>
        <div class="col-mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama anda">
        </div>
        <div class="col-mb-3">
            <label for="jurusan" class="form-label">Jurusan</label>
            <input type="text" class="form-control" id="jurusan" aria-describedby="jurusan" name="jurusan" placeholder="Masukkan Jurusan Anda">
        </div>
        <div class="col-mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control" id="email" aria-describedby="email" name="email" placeholder="Masukkan Email Anda">
        </div>
        <div class="col-mb-3">
            <label for="wa" class="form-label">No HP/WA</label>
            <input type="text" class="form-control" id="wa" aria-describedby="wa" name="wa" placeholder="Nomor HP/WhatsApp">
        </div>
        <center>
        <button type="submit" class="btn btn-primary">Simpan</button>
        </center>
        </div>
    </form>
    </div>
    <div><center><a href="lihat-data.php"><button class="btn btn-danger">View</button></a></center></div>
</table>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>

