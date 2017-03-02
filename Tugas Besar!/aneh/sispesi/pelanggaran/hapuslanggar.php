<?php 

$kd_pel = $_GET['no'];

//koneksi ke database
$konek = mysqli_connect("localhost", "root", "", "tugasbesar");

$hapus = "DELETE FROM pelanggaran WHERE kd_pel = '$kd_pel'";

$hasil = mysqli_query($konek,$hapus);

if($hasil){
	header("location:index.php");
}else{
	header("location:inputlanggar.php");
}

?>