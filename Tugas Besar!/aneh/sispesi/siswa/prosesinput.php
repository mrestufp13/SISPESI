<?php

//koneksi ke database
$konek = mysqli_connect("localhost", "root", "", "tugasbesar");

//ambil data dari form

$n1 = $_GET['nisn'];
$n2 = $_GET['nama'];
$a = $_GET['alamat'];

$input = "INSERT INTO siswa(nisn,nama,alamat)
		VALUES ('$n1','$n2','$a')";

$hasil = mysqli_query($konek,$input);

if($hasil){
	header("location:index.php");
}else{
	header("location:inputsiswa.php");
}

?>