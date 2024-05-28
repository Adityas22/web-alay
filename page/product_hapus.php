<?php
include 'koneksi.php';

$id_produk 	= $_GET['delete'];

$sql	= "DELETE FROM produk WHERE id_produk = '$id_produk' ";
$query	= mysqli_query($connect, $sql);

if ($query) {
	header("location: product.php");
} else {
	echo "Hapus data gagal...";
}