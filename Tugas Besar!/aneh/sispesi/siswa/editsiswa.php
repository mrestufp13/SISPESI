<?php 

$nomor = $_GET['no'];


//koneksi ke database
$konek = mysqli_connect("localhost", "root", "", "tugasbesar");

//query menampilkan data
$tampil = "SELECT * FROM siswa WHERE nomor = '$nomor' ";

$hasil = mysqli_query($konek,$tampil);

$data = mysqli_fetch_array($hasil);

?>

<h3>Update Siswa</h3>
<form method="GET" action="prosesupdate.php">
		NISN 	: <input type="text" name="nisn" value="<?php echo $data['nisn'];?>"><br>

		Nama 	: <input type="text" name="nama" value="<?php echo $data['nama'];?>"><br>

		<input type="hidden" name="nomor" value="<?php echo $data['nomor'];?>">

		Alamat 	: <textarea name="alamat" rows="5" COLS="30"><?php echo $data['alamat'];?></textarea><br>
<input type="submit" value="Kirim"><br>
</form>