<?php
include 'koneksi.php';

$username = $_POST['username'];
$password	= $_POST['password'];

$cek = mysqli_num_rows(mysqli_query($connect, "SELECT *  FROM user WHERE username='$username'"));

if ($cek>0) {
	header("location: register.php?message=register_gagal");

} else {
	$sql	= "INSERT INTO user VALUES('', '$username', '$password', 'user')";
	$query	= mysqli_query($connect, $sql) or die(mysqli_error($connect));
	if ($query) {
		header("location: login.php?message=register_berhasil");
	}
}