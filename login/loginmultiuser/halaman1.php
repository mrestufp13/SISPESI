<?php 
session_start();

//cek apakah user sudah login
if (!isset($_SESSION['userid'])) {
	header("location:index.php");
}

//cek level admin
if ($_SESSION['level'] != "admin") {
	die("Anda bukan admin");
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Halaman 1</title>
</head>
<body>

<h1>SELAMAT DATANG <?php echo $_SESSION['userid'] ?> </h1>
<br>
<a href="log.php?op=out">Log Out</a>

</body>
</html>