<?php 
session_start();

//cek apakah user sudah login
if (!isset($_SESSION['userid'])) {
	header("location:index.php");
}


//cek level admin
if ($_SESSION['level']!="user") {
	die("ANDA BUKAN ADMIN");
}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
</head>
<body>

<?php echo $_SESSION['userid'] ?>

<a href="halaman1.php">Halaman 1</a>
<a href="halaman2.php">Halaman 2</a>
<a href="halaman3.php">Halaman 3</a>
<a href="log.php?op=out">Log Out</a>

</body>
</html>