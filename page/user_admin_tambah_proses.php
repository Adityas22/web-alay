<?php
include 'koneksi.php';

$username = $_POST['username'];
$password	= $_POST['password'];
$level      = $_POST['level'];

$cek = mysqli_num_rows(mysqli_query($connect, "SELECT *  FROM user WHERE username='$username'"));

if ($cek>0) {
	header("location: register.php?message=register_gagal");

} else {
	$sql	= "INSERT INTO user VALUES('', '$username', '$password', '$level')";
	$query	= mysqli_query($connect, $sql) or die(mysqli_error($connect));
	if ($query) {
		header("location: user_admin.php?message=register_admin_berhasil");
	}
}