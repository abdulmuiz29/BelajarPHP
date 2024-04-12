<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Formulir Bootstrap</title>
</head>
<body>
    <div class="container">
    <h2 class="alert alert-primary text-center mt-3">FORMULIR MAHASISWA FASILKOM</h2>
    <form action="proses.php" method="post">
        <div class="form-grup">
            <label>Nama Lengkap</label>
            <input type="text" name="nama" class="form-control" placeholder="masukkan nama lengkap Anda"></input><br>
        </div>

        <div class="form-grup">
            <label>NIM</label>
            <input type="number" name="nim" class="form-control" placeholder="masukkan NIM Anda"></input><br>
        </div>

        <div class="form-grup">
            <label>Jenis Kelamin</label>
            <select class="form-control" name="jenis_kelamin" required>
                <option>Laki-laki</option>
                <option>Perempuan</option>
            </select><br>
        </div>

        <div class="form-grup">
            <label>Pilih Jurusan</label>
            <select class="form-control" name="jurusan" required>
                <option>Sistem Informasi</option>
                <option>Teknologi Informasi</option>
                <option>Informatika</option>
            </select><br>
        </div>

        <div class="form-grup">
            <label>Asal Kota</label>
            <input type="text" name="asal" class="form-control" placeholder="masukkan asal kota Anda"></input><br>
        </div>

        <div class="form-grup">
            <label>Email</label>
            <input type="email" name="email" class="form-control" placeholder="masukkan email Anda"></input><br>
        </div>
        <br>

        <button type="submit" class="btn btn-primary">Kirim</button>
        <button type="reset" class="btn btn-danger">Reset</button>

    </form>
    </div>
</body>
</html>
