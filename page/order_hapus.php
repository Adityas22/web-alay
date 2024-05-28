<?php
include 'koneksi.php';

$id_beli 	= $_GET['delete'];

$sql	= "DELETE FROM shipping WHERE id_shipping = '$id_beli' ";
$query	= mysqli_query($connect, $sql);

if ($query) {
	$sql2	= "DELETE FROM transaksi WHERE id_shipping = '$id_beli' ";
	$query2	= mysqli_query($connect, $sql2);
	if ($query2) {
		echo "berhasil";
		header("location: order.php");
	
	}
	else {
		echo"gagal...";
	}
} else {
	echo "Hapus data gagal...";
}