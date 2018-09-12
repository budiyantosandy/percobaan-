<!DOCTYPE html>
<html>
<!-- Bootstrap 3.3.6 -->
<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
<head>
	<title>Daftar BTS</title>
</head>
<body>
<center>

	<div class="panel panel-default">
<div class="panel-body">
	<h2>--- Silahkan Daftar ---</h2></div></div>
	<form action="do.php?kuy=simpan" method="post" enctype="multipart/form-data">
		<table>


	<div class="container">
<div class="panel panel-default">
		<div class="panel-body">
		 


<form class="form-horizontal" method="post">

<div class="form-group col-md-6">
					<label class="control-label col-xs-3">Nama</label>
					<div class="col-xs-9">
						<input type="text" name="nm" class="form-control" placeholder="Masukan Nama" required>
					</div>
					</div>

<div class="form-group col-md-6">
					<label class="control-label col-xs-4">Tempat, Tgl.Lahir</label>
					<div class="col-xs-8">
						<input type="text" name="ttl" class="form-control" placeholder="Jakarta, 01 Januari 1995" required>
					</div>
				</div>

<div class="form-group col-md-6">
					<label class="control-label col-xs-3">Alamat</label>
					<div class="col-xs-9">
						<textarea rows="5" type="text" name="almt" class="form-control" placeholder="Masukan Alamat" required></textarea>
					</div>
				</div>
				<div class="form-group col-md-6">
				    <label for="tp" class="control-label col-xs-4">Kelas</label>
				    <div class="col-xs-8">
				    <select class="form-control" id="tp" name="kls">
				    	<option value=' '>-- Pilih Kelas --</option>
				    	<option value='Kelas 9.1'>Kelas 9.1</option>
				    	<option value='Kelas 9.2'>Kelas 9.2</option>
				    	<option value='Kelas 9.3'>Kelas 9.3</option>
				    	<option value='Kelas 9.4'>Kelas 9.4</option>
				    	<option value='Kelas 9.5'>Kelas 9.5</option>
				    	<option value='Kelas 9.6'>Kelas 9.6</option>
				    	<option value='Kelas 9.7'>Kelas 9.7</option>
				    	<option value='Kelas 9.8'>Kelas 9.8</option>
				    </select>
				  </div></div>
				  <div class="form-group col-md-6">
					<label class="control-label col-xs-4">Pesan</label>
					<div class="col-xs-8">
						<textarea rows="3" type="text" name="psn" class="form-control" placeholder="Berikan Pesanmu" required></textarea>
					</div>
				</div>
				<div class="form-group col-md-6">
					<label class="control-label col-xs-3">Kesan</label>
					<div class="col-xs-9">
						<textarea rows="3" type="text" name="ksn" class="form-control" placeholder="Berikan Kesanmu" required></textarea>
					</div>
				</div>

				  <div class="form-group col-md-6">
					<label class="control-label col-xs-4">No.Telp/WA</label>
					<div class="col-xs-8">
						<input type="text" name="nmr" class="form-control" placeholder="0857293376xx" required>
					</div>
				</div>

				<div class="form-group col-md-6">
					<label class="control-label col-xs-4">Foto</label> *pilih hanya 1
					<div class="col-xs-6">
						<input type="file" name="fofi" class="form-control" placeholder="Masukan Foto 1 saja" required>
					</div>
				</div>

				<div class="col-xs-12 col-sm-12 col-md-12"></div>
				<label class="control-label col-xs-12"><h4><b>MEDIA SOSIAL</b></h4></label>

				<div class="form-group col-md-6">
					<label class="control-label col-xs-3">Instagram (IG)</label>
					<div class="col-xs-9">
						<input type="text" name="ig" class="form-control" placeholder="@Instagram_" required>
					</div>
				</div>

				  <div class="form-group col-md-6">
					<label class="control-label col-xs-4">Facebook (FB)</label>
					<div class="col-xs-8">
						<input type="text" name="fb" class="form-control" placeholder="Masukan ID Facebook" required>
					</div>
				</div>



				<div class="col-xs-12 col-sm-12 col-md-7"></div>
				<label class="control-label col-xs-7"><h4>*NB: Isi data dengan benar</h4></label>

</form>


<button type="submit" class="btn btn-primary col-xs-12"><b> >>>>> SIMPAN <<<<< </b></button>
</div></div>
</div>
				<a href="../index.php" class="btn btn-success col-xs-12" role="button"><b>KEMBALI</b></a>	<br><br><br>			  
</center>
</body>
<!-- Bootstrap 3.3.6 -->
<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
<!-- Bootstrap 3.3.6 -->
<script src="../bootstrap/js/bootstrap.min.js"></script>
</html>

<center>
<?php

include "../footer.php";
?>
</center>
