<?php
include "../koneksi/koneksi.php"
?>
<!DOCTYPE html>
<html>
<!-- Bootstrap 3.3.6 -->
<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
<head>
	<title>Login Admin</title>
</head>
<body>
	<center>
	<div class="panel panel-default">
<div class="panel-body">
<form action="doadmin.php?kuy=masuk" method="post">
	<div class="container">
<div class="panel panel-default">
		<div class="panel-body">
<h3>Selamat Datang Admin, ada perlu? Login dulu Lah, yakali kagak Login</h3><br><br>
			<div class="form-group col-md-6">
					<label class="control-label col-xs-3">Username</label>
					<div class="col-xs-9">
						<input type="text" name="usrnm" class="form-control" placeholder="Nama Dirahasiakan" required>
					</div>
					</div>

								<div class="form-group col-md-6">
					<label class="control-label col-xs-3">Password</label>
					<div class="col-xs-9">
						<input type="text" name="pswd" class="form-control" placeholder="Kode mulu, to the point kenapa" required>
					</div>
					</div>
</div></div></div>
<button type="submit" class="btn btn-primary col-xs-12"><b> >>>>> MASUK <<<<< </b></button>
</form>
</div></div>

<a href="../index.php" class="btn btn-success col-xs-12" role="button"><b>KEMBALI</b></a>
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