<?php
session_start();

$koneksi = mysqli_connect("localhost", "root", "", "xirpl2");

$userid = $_POST['userid'];
$psw = $_POST['psw'];
$op = $_GET['op'];


if ($op == "in") {
    
    $tampil = "SELECT * FROM tabeluser WHERE userid = '$userid'";
    $cek = mysqli_query($koneksi, $tampil);

    if (mysqli_num_rows($cek) == 1) {
        
        //jika berhasil isi data dicek
        $c = mysqli_fetch_array($cek);
        $_SESSION['userid'] = $c['userid'];
        $_SESSION['level'] = $c['level'];

        if ($c['level']=="admin") {
            header("location:homeadmin.php");
        }else if($c['level']=="user"){
            header("location:homeuser.php");
        }
    }else{
        echo $c['userid'];
        echo "GAGAL";
        //header("location:faillogin.php");
    }

}else if($op == "out"){
    unset($_SESSION['userid']);
    unset($_SESSION['level']);
    header("location:index.php");

}



?>