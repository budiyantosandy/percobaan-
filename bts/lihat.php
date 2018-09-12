<!-- Bootstrap 3.3.6 -->
<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
<!-- DataTables -->
<link rel="stylesheet" href="../plugins/datatables/dataTables.bootstrap.css">

<html>

<title>Kelas 9.2</title>
<center>
  <h1>E-BTS SMP Donal Angkatan 2009/2010</h1><a href="../index.php" class="btn btn-success" role="button">KELUAR</a>
</center>
<!--<a href="daftar.php" class="btn btn-success" role="button">Tambah Data</a>-->

		
		<?php
		include "../koneksi/koneksi.php";
		$q=mysqli_query($k,"SELECT * from kelas91 ");
		$urut=mysqli_num_rows($q);
		if ($urut >0) {
			?>
			<center>
 <table id="example1" class="table table-bordered table-striped">
 	<thead>
 		<tr>
 		<td>ID BTS</td> 
 		<td>Nama</td>
 		<td>Tempat,Tgl.Lahir</td>
<td>Alamat</td>
<td>Kelas</td>
<td>Pesan</td>
<td>Kesan</td>
<td>No.HP/WA</td>
<td>Instagram (IG)</td>
<td>Facebook (FB)</td>
<td>Foto</td>
<td colspan="2">Ubah | Hapus</td>
</tr>
 	</thead>
 <tbody>
			<?php
			while ($d=mysqli_fetch_array($q)) {

				?>
  		
				<tr>
					
						<td><?=$d['idbts']?></td>  
					<td><?=$d['nama']?></td>
					<td><?=$d['temtl']?></td>
					<td><?=$d['alamat']?></td>
					<td><?=$d['kelas']?></td>
					<td><?=$d['pesan']?></td>
					<td><?=$d['kesan']?></td>
					<td><?=$d['nomor']?></td>
					<td><?=$d['ig']?></td>
					<td><?=$d['fb']?></td>
		<td><img src="../foto/<?=$d['foto']?>" width="70" height="70"></td>
		<td><a href="ubah.php?kd=<?=$d['idbts']?>" class="btn btn-primary col-xs-12" role="button">U</a></td>
					<td><a href="do.php?kuy=hapus&kd=<?=$d['idbts']?>" onclick="return confirm('Yakin ingin hapus <?=$d['idbts']?> ?')" class="btn btn-primary col-xs-12" role="button">H</a></td>
				</tr>
					



				<?php
				# code...
			}
			# code...
		} else {
			?>
			<br><br><br><br>
			<center>
			<h3><strong> DATA KOSOONG!!!!! ISI LAH </strong></h3>
			<h3><strong> YAKALI KAGAK DI ISI </strong></h3><br><br><br><br>
			Klik tombol daftar dibawah kalo mau datanya  ada.<br><br>
			<a href="daftar.php" class="btn btn-success" role="button"><b>DAFTAR</b></a>
			</center>
			<?php
		}
		?>
</tbody>
	</table>

<br><br>
<!--	<button onclick="location.href='../index.php';">KEMBALI</button>  -->
	
</center>
</html>


<!-- jQuery 2.2.3 -->
<script src="../plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="../bootstrap/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- page script -->
<script>
  $(function () {
    $('#example1').DataTable({
      "columnDefs": [ {
        "orderable": false,
        "targets": 6,
        'searchable': false,
      }, {
        "orderable": false,
        "targets": 7,
        'searchable': false,
      } ],
      "paging": true,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>

<?php

include "../footer.php";
?>