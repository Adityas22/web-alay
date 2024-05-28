<?php
include 'koneksi.php';

$total_harga = $_POST['total'];
$nama = $_POST['nama'];
$no_hp	= $_POST['no_hp'];
$alamat     = $_POST['alamat'];
//shiping ditambah total harga
// $sql	= "INSERT INTO `shipping` (`nama`, `no_hp`, `alamat`, `total_harga`) VALUES('$nama', '$no_hp', '$alamat', $total_harga)";
$sql	= "INSERT INTO `shipping` (`nama`, `no_hp`, `alamat`, `total_harga`) VALUES('$nama', '$no_hp', '$alamat', '$total_harga')";
// $query	= mysqli_query($connect, $sql) or die(mysqli_error($connect));
$query	= mysqli_query($connect, $sql);
$id_shipping = mysqli_insert_id($connect);

foreach($_SESSION["shopping_cart"] as $keys => $data)
{
    echo "$keys";
    $sql = "INSERT INTO `transaksi` (`id_transaksi`, `id_shipping`, `nama_produk`, `jumlah`) VALUES ('', '$id_shipping', '$data[nama_produk]', '$data[jumlah_produk]')";
    $query = mysqli_query($connect, $sql);
}
unset($_SESSION['shopping_cart']);

header("location: ../page/home.php?messagge=transaksi_sukses");
?>