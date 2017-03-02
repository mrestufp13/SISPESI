<?php 

$kd_pel = @$_GET['kd_pel'];


//koneksi ke database
$konek = mysqli_connect("localhost", "root", "", "tugasbesar");

//query menampilkan data
$tampil = "SELECT * FROM pelanggaran WHERE kd_pel = '$kd_pel' ";

$hasil = mysqli_query($konek,$tampil);

$data = mysqli_fetch_array($hasil);


foreach ($hasil as $pilihan) {
	echo $pilihan['kd_pel'];
	echo $pilihan['jns_pel'];
	echo $pilihan['level'];
}

?>

<h3>Update Siswa</h3>
<form method="GET" action="prosesupdate.php">
		Jenis Pelanggaran 	: <input type="text" name="jns_pel" value="<?php echo $data['jns_pel'];?>"><br>

		<input type="hidden" name="kd_pel" value="<?php echo $data['kd_pel'];?>">

		Level		: <br>
		<input type="radio" name="level" value="berat" <?php if ($data['level']=="berat"){ echo "checked";} ?>>berat<br>

		<input type="radio" name="level" value="ringan" <?php if ($data['level']=="ringan"){ echo "checked";} ?>>ringan<br>

<input type="submit" value="Kirim"><br>
</form>