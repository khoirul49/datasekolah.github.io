<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-compatible" content="ie=edge">
    <title>Data Siswa</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.4.1.min.js"></script>
</head>
<body>
    <div class="container col-md-6">
    <div class="card-header bg-primary text-white">
        Input Data Siswa
    </div>   

<div class="card-body">
    <form action="" method="POST" class="form-item">
    <form>
    <div class="form-group">
    <label for="NIS"> NIS </label>
    <input type="number" name="NIS" class="form-control col-md-9" placeholder="Masukkan NIS">
    </div>

    <div class="form-group">
    <label for="NAMA"> NAMA </label>
    <input type="text" name="NAMA" class="form-control col-md-9" placeholder="Masukkan NAMA">
    </div>

    <div class="form-group">
    <label for="KELAS"> KELAS </label>
    <input type="text" name="KELAS" class="form-control col-md-9" placeholder="Masukkan KELAS">
    </div>

    <div class="form-group">
    <label for="TANGGAL_MASUK"> TANGGAL MASUK </label>
    <input type="date" name="TANGGAL_MASUK" class="form-control col-md-9" placeholder="Masukkan TANGGAL MASUK">
    </div>

    <div class="form-group">
    <label for="TANGGAL_KELUAR"> TANGGAL KELUAR </label>
    <input type="date" name="TANGGAL_KELUAR" class="form-control col-md-9" placeholder="Masukkan TANGGAL KELUAR">
    </div>

    <div class="form-group">
    <label for="ALAMAT"> ALAMAT </label>
    <input type="text" name="ALAMAT" class="form-control col-md-9" placeholder="Masukkan ALAMAT">
    </div>

    <div class="form-group">
    <label for="SERI_IJAZAH"> SERI IJAZAH </label>
    <input type="text" name="SERI_IJAZAH" class="form-control col-md-9" placeholder="Masukkan SERI IJAZAH">
    <br>
    <div class="container col-md-6">
    <button type="submit" class="btn btn-primary" name="simpan">SIMPAN</button>
    <button type="reset" class="btn btn-danger">BATAL</button>
    </div>  
    </form>
</body>
</html>

<?php
    include "koneksi.php";
    if(isset($_POST['simpan']))
    {
        $NIS            = $_POST['NIS'];
        $NAMA           = $_POST['NAMA'];
        $KELAS          = $_POST['KELAS'];
        $TANGGAL_MASUK  = $_POST['TANGGAL_MASUK'];
        $TANGGAL_KELUAR  = $_POST['TANGGAL_KELUAR'];
        $ALAMAT         = $_POST['ALAMAT'];
        $SERI_IJAZAH    = $_POST['SERI_IJAZAH'];
        
        mysqli_query($koneksi, "INSERT INTO tblmhs VALUES(
        '$NIS','$NAMA','$KELAS','$TANGGAL_MASUK','$TANGGAL_KELUAR','$ALAMAT','$SERI_IJAZAH'
        )") or die(mysqli_error($koneksi));

        echo "<div align='center'><h5> Silahkan Tunggu, Data Sedang Disimpan....</h5></div>";
        echo "<meta http-equiv='refresh' content='1;url=http://localhost/data/data_siswa.php'>";
    }

?>
