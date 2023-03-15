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
    <div class="container col-md-10">
    <div class="card-header bg-primary text-white">
        Table Data Siswa
    </div>   
    <br>
    <form method="GET" action="">
        Cari Nama <input type="text" name="s">
        <input type="submit" value="cari">
    </form>
        <div class="card-body">
            <a href="input.php" class="btn btn-primary">Tambah Data</a>
            <br>
            <br>
            <table class="table table-bordered">
                <tr>
                    <th>NO</th>
                    <th>NIS</th>
                    <th>NAMA</th>
                    <th>KELAS</th>
                    <th>TANGGAL MASUK</th>
                    <th>TANGGAL KELUAR</th>
                    <th>ALAMAT</th>
                    <th>SERI IJAZAH</th>
                    <th>AKSI</th>
                </tr>
            <?php
                include "koneksi.php";
                $no = 1;
                $NAMA = "";
                if (isset($_GET['s']))
                {
                    $NAMA = $_GET['s'];
                    $tampil = mysqli_query($koneksi, "SELECT * FROM tblmhs WHERE NAMA LIKE '%$NAMA'");
                }else
                $tampil = mysqli_query($koneksi, "SELECT * FROM tblmhs");
                while ($data = mysqli_fetch_array($tampil))
                {

            ?>
            <tr>
                    <td><?php echo $no++;?> </td>
                    <td><?php echo $data ['nis']?></td>
                    <td><?php echo $data ['nama']?></td>
                    <td><?php echo $data ['kelas']?></td>
                    <td><?php echo $data ['tanggal_masuk']?></td>
                    <td><?php echo $data ['tanggal_keluar']?></td>
                    <td><?php echo $data ['alamat']?></td>
                    <td><?php echo $data ['seri_ijazah']?></td>
            <td>
                    <a href="edit_data.php?nis=<?php echo $data['nis'];?>" class="btn btn-sm btn-warning">Edit</a>
                    <a href="hapus_data.php?nis=<?php echo $data['nis'];?>" class="btn btn-sm btn-danger">Hapus</a>
            </td>
            </tr>

            <?php } ?>
            </table>
        </div>
    </body>
</html>