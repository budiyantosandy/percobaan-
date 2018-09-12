$i=$_POST['id'];			$n=$_POST['nm'];				$t=$_POST['ttl'];					$al=$_POST['almt'];					$kl=$_POST['klss'];			$psn=$_POST['psn'];				$ksn=$_POST['ksn'];				$nmr=$_POST['nmr'];					$ig=$_POST['ig'];
		$fb=$_POST['fb'];
	
		 $ft=$_FILES['ff']['name'];

		$q=mysqli_query($k,"UPDATE kelas91 set nama='$n',temtl='$t',alamat='$al',kelas='$kl',pesan='$psn',kesan='$ksn',nomor='$nmr',ig='$ig',fb='$fb',foto='$ft' where idbts='$i'");
		if ($q) {
			move_uploaded_file($_FILES['ff']['tmp_name'], "../foto/".$ft);
		//	echo "<script>alert ('BERHASIL DIUBAH'); document.location='lihat.php'</script>";
			# code...
		} else {
			echo "<script>alert ('GAGAL DIUBAH'); document.location='daftar.php'</script>";
		}