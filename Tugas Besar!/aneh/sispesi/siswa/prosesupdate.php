<?php

//koneksi ke database
$konek = mysqli_connect("localhost", "root", "", "tugasbesar");

//ambil data dari form

$nomor = $_GET['nomor'];


$nisn = $_GET['nisn'];
$nama = $_GET['nama'];
$alamat = $_GET['alamat'];


$update = "UPDATE siswa SET nisn = '$nisn', nama = '$nama', alamat = '$alamat' WHERE nomor = '$nomor'";
$hasil = mysqli_query($konek,$update);


if($hasil)
{
	header("location:index.php");
}else{
	echo "input Data Tamu Gagal";
}