<?php 

$nomor = $_GET['no'];

//koneksi ke database
$konek = mysqli_connect("localhost", "root", "", "tugasbesar");

$hapus = "DELETE FROM siswa WHERE nomor = '$nomor'";

$hasil = mysqli_query($konek,$hapus);

if($hasil){
	header("location:index.php");
}else{
	header("location:inputsiswa.php");
}

?>