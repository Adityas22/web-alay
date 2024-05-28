<?php
include 'koneksi.php';

$nama_produk = $_POST['nama_produk'];
$harga_produk	= $_POST['harga_produk'];
$kategori_produk      = $_POST['kategori_produk'];

$cek = mysqli_num_rows(mysqli_query($connect, "SELECT *FROM produk WHERE nama_produk='$nama_produk'"));
echo "e";
if ($cek>0) {
    echo"a";
	header("location: product.php?message=register_gagal");

} else {
    $folder     = "../img/";
    $name_p     = $_FILES['foto_produk']['name'];
    $sumber_p   = $_FILES ['foto_produk']['tmp_name'];
    move_uploaded_file($sumber_p, $folder.$name_p);
	$sql	= "INSERT INTO produk VALUES('', '$nama_produk', '$kategori_produk', '$harga_produk', '$name_p')";
	$query	= mysqli_query($connect, $sql) or die(mysqli_error($connect));
	if ($query) {
        echo "b";
		header("location: product.php?message=register_admin_berhasil");
	}
}
?>