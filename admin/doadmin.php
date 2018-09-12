<?php
include "../koneksi/koneksi.php";
//include "admin/beranda.php";

$user=$_POST["usrnm"];
$pass=$_POST["pswd"];
$sql=mysqli_query($k,"select * from admin where user='$user' and pass='$pass'");
$num=mysqli_num_rows($sql);

if ($num==0) {
//	header('Location:admin.php');
	echo "<script>alert ('Username atau Password salah, coba Lagi'); document.location='admin.php'</script>";

} else {
//	header('Location:../bts/lihat.php');
	echo "<script>alert ('Selamat Datang Admin'); document.location='../bts/lihat.php'</script>";
} 
?>