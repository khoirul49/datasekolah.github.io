<?php 
session_start();
include 'koneksi.php';
$username = mysqli_real_escape_string($koneksi, $_POST['username']);
$password = mysqli_real_escape_string($koneksi, $_POST['password']);
$result = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username' and password='$password'");
if(mysqli_num_rows($result) === 1) {
	$_SESSION['username'] = $username;
	header("location:data_siswa.php");
	exit();
} else {
	header("location:index.php?pesan=gagal");
	exit();
}
?>