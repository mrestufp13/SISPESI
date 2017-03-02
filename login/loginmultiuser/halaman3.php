<?php 

session_start();
if (!isset($_SESSION['userid'])) {
	header("location:index.php");
}

if ($_SESSION['level'] != "user") {
	die("anda bukan admin dan bukan user");
}
?>



<!DOCTYPE html>
<html>
<head>
	<title>Halaman 3</title>
</head>
<body>


<?php echo $_SESSION['userid'] ?>

<a href="halaman1.php">HALAMAN 1 </a>
<a href="halaman2.php">HALAMAN 2 </a>
<a href="log.php?op=out">LOG OUT </a>
<a href="log.php?op=out">Log Out</a>

</body>
</html>