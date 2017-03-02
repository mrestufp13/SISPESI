<h3>Data Tamu</h3>

<a href="inputsiswa.php">Input Data Siswa</a>

<form action="index.php" method="GET">
	<input type="text" name="s">
	<input type="submit" value="CARI" name="cari">
</form>

<hr>

<?php

$batas = 5;
$halaman = @$_GET['halaman'];

if(empty($halaman)){
	$posisi = 0;
	$halaman = 1;
}else{
	$posisi = ($halaman - 1) * $batas;
}

//koneksi ke database
$konek = mysqli_connect("localhost", "root", "", "tugasbesar");

//query menampilkan data
if(isset($_GET['cari'])){
	$q = $_GET['s'];

	$tampil = "SELECT * FROM siswa WHERE nisn LIKE '%$q%' OR nama LIKE '%$q%' OR alamat LIKE '%$q%' ORDER BY nisn LIMIT $posisi, $batas";
}else{
	$tampil = "SELECT * FROM siswa ORDER BY nisn LIMIT $posisi, $batas";
}

$hasil = mysqli_query($konek,$tampil);
$jmlhasil = mysqli_num_rows($hasil);

?>

<table border="1">
	<tr>
		<th>No</th>
		<th>NISN</th>
		<th>Nama</th>
		<th>Alamat</th>
		<th>Aksi</th>
	</tr>

<?php

if($jmlhasil < 1){
	echo "<tr>";
	echo "<td colspan='5'>Data yang anda cari dimakan dinosaurus</td>";
	echo "</tr>";
}else{
	//penomoran
	$no = $posisi + 1;
	//tampil nama, email dan pesan
	while($data=mysqli_fetch_array($hasil)){
		echo "<tr>";
		echo "<td>$no</td>";
		echo "<td>$data[nisn]</td>";
		echo "<td>$data[nama]</td>";
		echo "<td>$data[alamat]</td>";
		echo "<td><a href='hapussiswa.php?no=$data[nomor]'>Hapus</a> | <a href='editsiswa.php?no=$data[nomor]'>Edit</a> </td>";
		echo "</tr>";
		$no++;
		}
}

?>

</table>

<?php

//untuk paging
$tampil2 = "SELECT * FROM siswa";
$hasil2 = mysqli_query($konek, $tampil2);
$jmldata = mysqli_num_rows($hasil2);
$jmlhalaman = ceil($jmldata / $batas);

echo " JUMLAH DATA : $jmldata <br>";

for($i=1; $i <= $jmlhalaman; $i++){
	if($i != $halaman){
		echo "<a href = $_SERVER[PHP_SELF]?halaman=$i >$i </a>";
	}else{
		echo "<b>$i </b>";
	}
	
}

?>