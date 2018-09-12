<title>Ubah Data BTS</title>
<?php
include "../koneksi/koneksi.php";
$aksi=$_GET['kd'];
$query=mysqli_query($k, "SELECT * FROM kelas91 where idbts='$aksi' ");
$data=mysqli_fetch_array($query);
?>

<center>


	<h1>--->>> Ubah Data BTS <<<---</h1><br>
			<form action="do.php?kuy=ubah" method="post" enctype="multipart/form-data">
	<table>

		<div class="container">
<div class="panel panel-default">
		<div class="panel-body">
		 


<form class="form-horizontal" method="post">

	<div class="form-group col-md-6">
					<label class="control-label col-xs-3">ID</label>
					<div class="col-xs-7">
						<input readonly="" type="text" name="id" class="form-control" placeholder="Masukan Nama" required value="<?=$data['idbts'] ?>">
					</div>
					</div>

<div class="form-group col-md-5">
					<label class="control-label col-xs-3">Nama</label>
					<div class="col-xs-9">
						<input type="text" name="nm" class="form-control" placeholder="Masukan Nama" required value="<?=$data['nama'] ?>">
					</div>
					</div>

<div class="form-group col-md-6">
					<label class="control-label col-xs-3">Tempat, Tgl.Lahir</label>
					<div class="col-xs-7">
						<input type="text" name="ttl" class="form-control" placeholder="Jakarta, 01 Januari 1995" required value="<?=$data['temtl'] ?>">
					</div>
				</div>

<div class="form-group col-md-5">
					<label class="control-label col-xs-3">Alamat</label>
					<div class="col-xs-9">
						<textarea rows="5" type="text" name="almt" class="form-control" placeholder="Masukan Alamat" required><?=$data['alamat'] ?></textarea>
					</div>
				</div>

				<div class="form-group col-md-6">
				    <label for="tp" class="control-label col-xs-3">Kelas</label>
				    <div class="col-xs-7">
				    <select class="form-control" id="tp" name="klss">
				    		<?php
					$jurus=array('Kelas 9.1','Kelas 9.2','Kelas 9.3','Kelas 9.4','Kelas 9.5','Kelas 9.6','Kelas 9.7','Kelas 9.8');
					for ($i=0; $i<=7; $i++) {
					if ($data['kelas']==$jurus[$i]) {
						echo "<option value='$jurus[$i]' selected>".$jurus[$i]."</option>";
					 	# code...
					 } else {
					 	echo "<option value='$jurus[$i]'>".$jurus[$i]."</option>";
					 }
						# code...
					}
					?>
				    </select>
				  </div></div>

				  <div class="form-group col-md-5">
					<label class="control-label col-xs-3">Pesan</label>
					<div class="col-xs-9">
						<textarea rows="3" type="text" name="psn" class="form-control" placeholder="Berikan Pesanmu" required><?=$data['pesan'] ?></textarea>
					</div>
				</div>

<div class="form-group col-md-6">
					<label class="control-label col-xs-3">Kesan</label>
					<div class="col-xs-7">
						<textarea rows="3" type="text" name="ksn" class="form-control" placeholder="Berikan Kesanmu" required><?=$data['kesan'] ?></textarea>
					</div>
				</div>

				  <div class="form-group col-md-5">
					<label class="control-label col-xs-3">No.Telp/WA</label>
					<div class="col-xs-9">
						<input type="text" name="nmr" class="form-control" placeholder="0857293376xx" required value="<?=$data['nomor'] ?>">
					</div>
				</div>

				<div class="form-group col-md-5">
					<label class="control-label col-xs-3">Foto</label>
					<div class="col-xs-9">
					<input type="file" name="ff" class="form-control" placeholder="Masukan Foto 1 saja">	
						<img src="../foto/<?php echo $data['foto']; ?>" width="100x" height="100px"  name="ff">
					</div>
				</div>

				<div class="col-xs-12 col-sm-12 col-md-12"></div>
				<label class="control-label col-xs-12"><h4><b>MEDIA SOSIAL</b></h4></label>

				<div class="form-group col-md-6">
					<label class="control-label col-xs-3">Instagram (IG)</label>
					<div class="col-xs-9">
						<input type="text" name="ig" class="form-control" placeholder="@Instagram_" required value="<?=$data['ig'] ?>">
					</div>
				</div>

				  <div class="form-group col-md-6">
					<label class="control-label col-xs-4">Facebook (FB)</label>
					<div class="col-xs-8">
						<input type="text" name="fb" class="form-control" placeholder="Masukan ID Facebook" required value="<?=$data['fb'] ?>">
					</div>
				</div>



				<div class="col-xs-12 col-sm-12 col-md-7"></div>
				<label class="control-label col-xs-7"><h4>*NB: Isi data dengan benar</h4></label>

</form>


<button type="submit" class="btn btn-primary col-xs-12"><b> >>>>> SIMPAN <<<<< </b></button><br><br>

</div></div>
</div>
	</table>
	</form>
	<a href="lihat.php" class="btn btn-sm btn-danger col-xs-12" role="button"><b> ----- KEMBALI ----- </b></a>

	<!-- Bootstrap 3.3.6 -->
<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
</center>
</body>
</html>

<center>
<?php

include "../footer.php";
?>
</center>
