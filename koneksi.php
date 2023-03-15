<?php
    $koneksi = mysqli_connect("localhost", "root", "", "data");

    if(!$koneksi)
    {
        echo "Koneksi ke MySQL Gagal... ";
    }
?>