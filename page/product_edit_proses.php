<?php
include 'koneksi.php';

$id_produk    = $_POST['id_produk'];
$nama_produk = $_POST['nama_produk'];
$harga_produk	= $_POST['harga_produk'];
$kategori_produk      = $_POST['kategori_produk'];

$folder     = "../img/";
$name_p     = $_FILES['foto_produk']['name'];
$sumber_p   = $_FILES ['foto_produk']['tmp_name'];

// Proses ubah data ke Database

$sql = "UPDATE produk SET nama_produk='$nama_produk', kategori_produk='$kategori_produk', harga_produk='$harga_produk', foto_produk='$name_p' WHERE id_produk = '$id_produk'";
$query	= mysqli_query($connect, $sql) or die(mysqli_error($connect));

if ($query) {
    echo "Update data";
	header("location: product.php");
} else {
	echo "Update data gagal";
}
?>