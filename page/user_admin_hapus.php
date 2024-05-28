<?php
include 'koneksi.php';

$id_user 	= $_GET['delete'];

$sql	= "DELETE FROM user WHERE id_user = '$id_user' ";
$query	= mysqli_query($connect, $sql);

if ($query) {
	header("location: user_admin.php");
} else {
	echo "Hapus data gagal...";
}