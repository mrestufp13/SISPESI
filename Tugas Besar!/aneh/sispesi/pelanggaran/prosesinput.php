<?php

//koneksi ke database
$konek = mysqli_connect("localhost", "root", "", "tugasbesar");

//ambil data dari form
$j = $_GET['jns_pel'];
$l = $_GET['level'];

$input = "INSERT INTO pelanggaran(jns_pel,level)
		VALUES ('$j','$l')";

$hasil = mysqli_query($konek,$input);

if($hasil){
	header("location:index.php");
}else{
	header("location:inputlanggar.php");
}

?>