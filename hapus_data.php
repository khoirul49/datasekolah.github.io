<?php
    include "koneksi.php";
    $id = $_GET['nis'];
    $ambilData = mysqli_query($koneksi, "DELETE FROM tblmhs WHERE nis='$id'");
    echo "<meta http-equiv='refresh' content='1;url=http://localhost/data/data_siswa.php'>";
?>