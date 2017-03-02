<?php

//koneksi ke database
$konek = mysqli_connect("localhost", "root", "", "tugasbesar");

//ambil data dari form

$kd_pel = $_GET['kd_pel'];

$jns_pel = $_GET['jns_pel'];
$level = $_GET['level'];


$update = "UPDATE pelanggaran SET $jns_pel = '$jns_pel', level = '$level' WHERE kd_pel = '$kd_pel'";
$hasil = mysqli_query($konek,$update);


if($hasil)
{
	header("location:index.php");
}else{
	echo "input Data Pelanggaran Gagal";
}