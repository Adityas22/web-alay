<?php
include 'koneksi.php';

$id_user    = $_POST['id_user'];
$username	= $_POST['username'];
$password   = $_POST['password'];
$level	    = $_POST['level'];

$sql	= "UPDATE user SET username='$username', password='$password', level='$level' WHERE id_user = '$id_user'";
$query	= mysqli_query($connect, $sql) or die(mysqli_error($connect));


if ($query) {
    echo "Update data";
	header("location: user_admin.php");
} else {
	echo "Update data gagal";
}