<?php
include "../koneksi/koneksi.php";

if (isset($_GET['kuy'])) {
	$a=$_GET['kuy'];

	if ($a=='simpan') {

		$n=$_POST['nm'];	$t=$_POST['ttl'];	$al=$_POST['almt'];	$kls=$_POST['kls'];	$psn=$_POST['psn'];	$ksn=$_POST['ksn'];	$nmr=$_POST['nmr'];
		$ig=$_POST['ig'];	$fb=$_POST['fb'];	$f=$_FILES['fofi']['name'];

		$q=mysqli_query($k,"INSERT into kelas91 values('','$n','$t','$al','$kls','$psn','$ksn','$nmr','$ig','$fb','$f')");
		if ($q) {
			move_uploaded_file($_FILES['fofi']['tmp_name'], "../foto/".$f);
			echo "<script>alert ('TERSIMPAN'); document.location='kelas.php'</script>";
			# code...
		} else {
			echo "<script>alert ('GAGAL TERSIMPAN'); document.location='daftar.php'</script>";
		}  
		# code...
	} else if ($a=='ubah') {
		  
		$i=$_POST['id'];	$n=$_POST['nm'];	$t=$_POST['ttl'];	$al=$_POST['almt'];		$kl=$_POST['klss'];		$psn=$_POST['psn'];		$ksn=$_POST['ksn'];		$nmr=$_POST['nmr'];		$ig=$_POST['ig'];	$fb=$_POST['fb'];

		if(!isset($_FILES['ff']['name']) || empty($_FILES['ff']['name'])){


			$q=mysqli_query($k, "UPDATE kelas91 set nama='$n', temtl='$t', alamat='$al', kelas='$kl', pesan='$psn', kesan='$ksn', nomor='$nmr', ig='$ig', fb='$fb'where idbts='$i' ");


		}else{
			$ft=$_FILES['ff']['name'];

			$q=mysqli_query($k, "UPDATE kelas91 set nama='$n', temtl='$t', alamat='$al', kelas='$kl', pesan='$psn', kesan='$ksn', nomor='$nmr', ig='$ig', fb='$fb', foto='$ft' where idbts='$i' ");
			move_uploaded_file($_FILES['ff']['tmp_name'] , '../foto/'.$ft);

		}	
		

		if ($q) {
			
			echo "<script>alert('Berhasil Diubah'); document.location='lihat.php'</script>";
			# code...
		} else {
			echo "<script>alert('Gagal Diubah'); document.location='daftar.php'</script>";
		}

	} else if ($a=='hapus') {
		$d=$_GET['kd'];
		$q=mysqli_query($k,"DELETE from kelas91 where idbts='$d'");
		if ($q) {
		
			echo "<script>alert ('BERHASIL DIHAPUS'); document.location='lihat.php'</script>";
			# code...
		} else {
			echo "<script>alert ('GAGAL DIHAPUS'); document.location='daftar.php'</script>";
		}

	}

	


	# code...
} else {
	header("location.href='../index.php'");
}

?>